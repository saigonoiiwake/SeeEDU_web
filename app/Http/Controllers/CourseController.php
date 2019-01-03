<?php

namespace App\Http\Controllers;

use App\Course;
use App\Repository\Course\CourseRepository;
use App\User;
use App\CourseCategory;
use App\CourseDescription;
use Session;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    protected $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function index()
    {
      $new_courses = Course::whereDate('from_date', '>', date('Y-m-d'))->get()->sortBy("from_date");
      $old_courses = Course::whereDate('from_date', '<=', date('Y-m-d'))->get()->sortByDesc("from_date");
      $courses = $new_courses->merge($old_courses);
      return view('courses.index')->with('courses', $courses)->with('categories', CourseCategory::skip(2)->take(2)->get());
    }

    public function singleCourse($id)
    {
      $course = Course::where('id', $id)->first();

      if ($course->status === 'open') {
        //update browse number
        $course->browse_num ++;
        $course->save();

        return view('courses.single')->with('course', $course);
      } else {
        Session::flash('info', '此課程未開放！');
        return redirect()->back();
      }
    }


    public function category($id)
    {
      $category_IDs = collect( [$id] );

      $third_layers = CourseCategory::where('parent_id', $id)->get();

      foreach($third_layers as $third_layer) {
        $category_IDs = $category_IDs->merge( [$third_layer->id] );
      }

      $categories = CourseCategory::findMany($category_IDs);

      return view('courses.category')
        ->with('bottom_categories', $categories)
        ->with('categories', CourseCategory::skip(2)->take(2)->get());
    }

    // [API] Query course by id
    public function show(Course $course)
    {
      if ( $course->status === 'open') {
        //update browse number
        $course->browse_num ++;
        $course->save();
        
        //query course description
        $course_description = CourseDescription::where('course_id', $course->id)->first();
        $course->description = $course_description->description;
        return response()->json([
          'status' => 'Success',
          'data' => $course
        ]);
      } else {
        return response()->json([
          'status' => 'Fail',
          'message' => '此課程未開放！'
        ]);
      }
    }

    // [API] Top n enroll student open courses
    public function showNew($count)
    {
      $new_courses = Course::where('status', 'open')->whereDate('from_date', '>', date('Y-m-d'))->get()->sortByDesc("enroll_num")->take($count);
      $old_courses = Course::where('status', 'open')->whereDate('from_date', '<=', date('Y-m-d'))->get()->sortByDesc("from_date")->take($count - count($new_courses));
      $courses = $new_courses->merge($old_courses);
      foreach($courses as $course) {
        $course['avatar'] = $course->teacherOrTA()->get()->first()->avatar;
        $course['teacher_name'] = $course->teacherOrTA()->get()->first()->nick_name;
      }
      return response()->json([
        'status' => 'Success',
        'data' => $courses
      ]);
    }

    // [API] All open courses
    public function showAll()
    {
      $new_courses = Course::where('status', 'open')->whereDate('from_date', '>', date('Y-m-d'))->get()->sortBy("from_date");
      $old_courses = Course::where('status', 'open')->whereDate('from_date', '<=', date('Y-m-d'))->get()->sortByDesc("from_date");
      $courses = $new_courses->merge($old_courses);

      foreach($courses as $course) {
        $course['avatar'] = $course->teacherOrTA()->get()->first()->avatar;
        $course['teacher_name'] = $course->teacherOrTA()->get()->first()->nick_name;
      }
      return response()->json([
        'status' => 'Success',
        'data' => $courses
      ]);
    }
}
