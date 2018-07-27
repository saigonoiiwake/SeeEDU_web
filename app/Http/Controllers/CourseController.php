<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Stripe\Stripe;
use Stripe\Charge;
use Session;
use Mail;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    public function index()
    {
      return view('courses')->with('courses', Course::all());
    }

    public function singleCouse($id)
    {
      $course = Course::where('id', $id)->first();

      return view('single_course')->with('course', $course);

    }

    public function pay($id, Request $request)
    {
      Log::info($request);
      $course = Course::find($id);
      //dd($course->price);

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



      Log::info($charge);
      Log::info($charge['paid']);

      if(!$charge['paid']) {
        Session::flash('success', '成功失敗');
        return redirect('/course/' . $id);
      }

      Session::flash('success', '成功付款，請至信箱確認');

      Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

      return redirect('/course/' . $id);
    }


}
