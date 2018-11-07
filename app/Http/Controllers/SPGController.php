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
use Mockery\Exception;
use Illuminate\Support\Facades\DB;
use LeoChien\Spgateway\Facades\MPG;

class SPGController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function login($id)
  {
      return redirect('/course/' . $id);
  }

  public function spg()
  {
    $order = MPG::generate(
      10000,
      'john80510@gmail.com',
      'SeeEDU N3日文課'
    );

    return $order->send();

    // $order = array(
    //   'key0'  => 'value0',
    //   'key1' => 'value1',
    //   'key2' => 'value2'
    // );

    // return view('send-order')->with('apiUrl', 'https://ccore.spgateway.com/MPG/mpg_gateway')->with('order', $order);
  }

  public function pay($id, Request $request)
  {


    DB::beginTransaction();

    try{
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
      Stripe::setApiKey("sk_live_GSvVivTVkXEj6aj5PEN65TcJ");

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


      $data = array(
        'course_name' => $course->title,
        'course_price' => $final_price/100,
        'from_date' => $course->from_date
      );

      Mail::to(request()->stripeEmail)
            ->bcc('b816132@gmail.com')
            ->send(new \App\Mail\PurchaseSuccessful($data));

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

      Session::flash('success', '成功付款，請至信箱確認');

      DB::commit();

      return redirect()->route('PurchaseSuccessful');
    }catch (\Exception $e) {
        DB::rollback();
        report($e);

      Session::flash('warning', '您的信用卡無法付款，請聯繫客服人員');

      return redirect('/course/' . $course->id);
    }

    session()->forget('coupon');


  }


}
