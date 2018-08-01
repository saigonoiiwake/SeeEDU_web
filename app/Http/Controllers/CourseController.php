<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
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
      return view('courses')->with('courses', Course::all())
                            ->with('categories', CourseCategory::take(2)->get());
    }

    public function singleCourse($id)
    {
      $course = Course::where('id', $id)->first();

      //update browse number
      $course->browse_num ++;
      $course->save();

      return view('single_course')->with('course', $course);

    }


    public function category($id)
    {

      $second_layers = CourseCategory::where('parent_id', $id)->get();
      $category_IDs = collect( [$id] );

      foreach($second_layers as $second_layer )
      {
        $third_layers = CourseCategory::where('parent_id', $second_layer->id)->get();

        foreach($third_layers as $third_layer)
        {
          $category_IDs = $category_IDs->merge( [$third_layer->id] );
        }
      }

      //dd($category_IDs);

      $categories = CourseCategory::findMany($category_IDs);

      return view('CourseCategory')->with('bottom_categories', $categories)
                                  ->with('categories', CourseCategory::take(2)->get());

    }


}
