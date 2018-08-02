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

class CheckoutController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }


  public function pay($id, Request $request)
  {


    $course = Course::findOrFail($id);
    $uid = \Auth::user()->id;

    $check_exist = Enroll::where('user_id', $uid)
                          ->where('course_id', $course->id)
                          ->count();
    if($check_exist)
    {
        Session::flash('info', '已購買過此課');
        return redirect()->back();
    }


    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    Stripe::setApiKey("sk_test_kAXem82PGepcHgCcuyPHDcmo");

    // Token is created using Checkout or Elements!
    // Get the payment token ID submitted by the form:
    $token = $_POST['stripeToken'];;



    if( session()->has('coupon') )
    {
      $final_price = (1.1*$course->price - session()->get('coupon')['discount'])*100;
    }
    else
    {
      $final_price = 100*1.1*$course->price;    //100=>cent to dollar 1.1=>service fees
    }

    $charge = Charge::create([
      'amount' => $final_price,
      'currency' => 'twd',
      'description' => 'SeeEDU Live School',
      'source' => $token
    ]);

    Session::flash('success', '成功付款，請至信箱確認');

    $data = array(
      'course_name' => $course->title,
      'course_price' => $course->price,
      'from_date' => $course->from_date
    );

    //dd($data);

    Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful($data));


    // Store transaction data into Table:transaction
    if( session()->has('coupon') )
    {
      $transaction = Transaction::create([
        'user_id' => $uid,
        'course_id' => $course->id,
        'purchase_price' => $final_price/100,
        'channel' => 'stripe',
        'coupon_code' => session()->get('coupon')['name']
      ]);
    }
    else
    {
      $transaction = Transaction::create([
        'user_id' => $uid,
        'course_id' => $course->id,
        'purchase_price' => $final_price/100,
        'channel' => 'stripe',
        'coupon_code' => null
      ]);
    }

    // Update enroll number in Table: Course
    $course->enroll_num ++;
    $course->save();

    // Store into Table: enroll
    $enroll = Enroll::create([
      'course_id' => $course->id,
      'user_id' => $uid
    ]);

    session()->forget('coupon');


    return redirect('/course/' . $course->id);
  }


}
