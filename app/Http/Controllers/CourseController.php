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
use Jenssegers\Agent\Agent;

class CourseController extends Controller
{
    public function index()
    {
      return view('courses')->with('courses', Course::all())
                            ->with('categories', CourseCategory::take(2)->get());
    }

    public function singleCourse($id)
    {
      $agent = new Agent();

      if($agent->isMobile() || $agent->isTablet()){
        $agent->setUserAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 9_3 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13E233 Safari/601.1');
      }
      
      $course = Course::where('id', $id)->first();

      if( $course->status === 'open')
      {
        //update browse number
        $course->browse_num ++;
        $course->save();

        return view('single_course')->with('course', $course);

      }
      else
      {
        Session::flash('info', '此課程未開放！');
        return redirect()->back();
      }

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
