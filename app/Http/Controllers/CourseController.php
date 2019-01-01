<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Stripe\Stripe;
use Stripe\Charge;
use Session;
use Mail;
use Illuminate\Support\Facades\Log;
use App\Repository\Repositories\Course\CourseRepository;
use App\Repository\Repositories\Course\CourseCategoryRepository;

class CourseController extends Controller
{
    protected $courseRepository;
    protected $couresCategoryRepository;

    public function __construct(CourseRepository $courseRepository, CourseCategoryRepository $courseCategoryRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->couresCategoryRepository = $courseCategoryRepository;
    }

    public function index()
    {
        $new_courses = $this->courseRepository->newCourse('>', 'from_date');
        $old_courses = $this->courseRepository->oldCourse('<=', 'from_date');
        $courses = $new_courses->merge($old_courses);
        return view('courses.index')->with('courses', $courses)->with('categories', $this->couresCategoryRepository->cateGorySkipTake(2,2));
    }

    public function singleCourse($id)
    {
        $course = $this->courseRepository->find($id);

        if ($course->status === 'open') {
            //update browse number
            $update['browse_num'] = $course->browse_num + 1;
            $this->courseRepository->courseUpdateById($id, $update);

            return view('courses.single')->with('course', $course);
        } else {
            Session::flash('info', '此課程未開放！');
            return redirect()->back();
        }
    }


    public function category($id)
    {
        $category_IDs = collect( [$id] );

        $query ['parent_id'] = $id;
        $third_layers = $this->couresCategoryRepository->getCateGorys($query);

        foreach ($third_layers as $third_layer) {
          $category_IDs = $category_IDs->merge( [$third_layer->id] );
        }

        $categories = $this->couresCategoryRepository->findMany($category_IDs);

        return view('courses.category')
            ->with('bottom_categories', $categories)
            ->with('categories', $this->couresCategoryRepository->cateGorySkipTake(2,2));
    }

    // [API] Query course by id
    public function show(Course $course)
    {
      return $course;
    }

    // [API] Top n enroll student open courses
    public function showNew($count)
    {
        $query ['status'] = 'open';
        $new_courses = $this->courseRepository->newCourseTake($query, '>', 'enroll_num', $count);
        $oldCount = $count - count($new_courses);
        $old_courses = $this->courseRepository->oldCourseTake($query, '<=', 'from_date', $oldCount);

        $courses = $new_courses->merge($old_courses);

        foreach($courses as $course) {
            $course['avatar'] = $course->teacherOrTA()->get()->first()->avatar;
            $course['teacher_name'] = $course->teacherOrTA()->get()->first()->nick_name;
        }
        return $courses;
    }

    // [API] All open courses
    public function showAll()
    {
        $query['status'] = 'open';
        return $this->courseRepository->getCourse($query);
    }
}
