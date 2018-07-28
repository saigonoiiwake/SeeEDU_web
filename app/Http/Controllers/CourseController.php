<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Stripe\Stripe;
use Stripe\Charge;
use Session;
use Mail;
use App\Transaction;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index()
    {
      return view('courses')->with('courses', Course::all());
    }

    public function singleCourse($id)
    {
      $course = Course::where('id', $id)->first();

      //update browse number
      $course->browse_num ++;
      $course->save();

      return view('single_course')->with('course', $course);

    }

    public function pay($id, Request $request)
    {
      Log::info($request);
      $course = Course::find($id);
      $id = \Auth::user()->id;

      // Set your secret key: remember to change this to your live secret key in production
      // See your keys here: https://dashboard.stripe.com/account/apikeys
      Stripe::setApiKey("sk_test_kAXem82PGepcHgCcuyPHDcmo");

      // Token is created using Checkout or Elements!
      // Get the payment token ID submitted by the form:
      $token = $_POST['stripeToken'];;

      $final_price = 100*$course->price;

      if( session()->has('coupon') )
      {
        $final_price = ($course->price - session()->get('coupon')['discount'])*100;
      }

      $charge = Charge::create([
        'amount' => $final_price,
        'currency' => 'twd',
        'description' => 'SeeEDU Live School',
        'source' => $token
      ]);

      Session::flash('success', '成功付款，請至信箱確認');

      Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

      // Store transaction data into Table:transaction
      if( session()->has('coupon') )
      {
        $transaction = Transaction::create([
          'user_id' => $id,
          'course_id' => $course->id,
          'purchase_price' => $final_price/100,
          'channel' => 'stripe',
          'coupon_code' => session()->get('coupon')['name']
        ]);
      }
      else
      {
        $transaction = Transaction::create([
          'user_id' => $id,
          'course_id' => $course->id,
          'purchase_price' => $final_price/100,
          'channel' => 'stripe',
          'coupon_code' => null
        ]);
      }

      // Update enroll number in
      $course->enroll_num ++;
      $course->save();


      return redirect('/course/' . $course->id);
    }


}
