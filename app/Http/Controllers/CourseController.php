<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Chapter;
use App\CourseCategory;
use Stripe\Stripe;
use Stripe\Charge;
use Session;
use Mail;
use App\Transaction;
use App\Enroll;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
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

      if( $course->status === 'open')
      {
        //update browse number
        $course->browse_num ++;
        $course->save();

        return view('courses.single')->with('course', $course);

      }
      else
      {
        Session::flash('info', '此課程未開放！');
        return redirect()->back();
      }

    }


    public function category($id)
    {

      //$second_layers = CourseCategory::where('parent_id', $id)->get();
      $category_IDs = collect( [$id] );

      //foreach($second_layers as $second_layer )
      //{
        //$third_layers = CourseCategory::where('parent_id', $second_layer->id)->get();
        $third_layers = CourseCategory::where('parent_id', $id)->get();

        foreach($third_layers as $third_layer)
        {
          $category_IDs = $category_IDs->merge( [$third_layer->id] );
        }
      //}

      $categories = CourseCategory::findMany($category_IDs);

      return view('courses.category')->with('bottom_categories', $categories)
                                  ->with('categories', CourseCategory::skip(2)->take(2)->get());

    }

    // [API] Query course by id
    public function show(Course $course)
    {
      return $course;
    }

    // [API] Top n enroll student open courses
    public function showNew($count)
    {
      $new_courses = Course::take($count)->where('status', 'open')->whereDate('from_date', '>', date('Y-m-d'))->get()->sortByDesc("enroll_num");
      $old_courses = Course::take($count - count($new_courses))->where('status', 'open')->whereDate('from_date', '<=', date('Y-m-d'))->get()->sortByDesc("enroll_num");
      $courses = $new_courses->merge($old_courses);
      foreach($courses as $course){
        $course['avatar'] = $course->teacherOrTA()->get()->first()->avatar;
        $course['teacher_name'] = $course->teacherOrTA()->get()->first()->nick_name;
      }
      return $courses;
    }

    // [API] All open courses
    public function showAll()
    {
      return Course::where('status', 'open')->get();
    }
}
