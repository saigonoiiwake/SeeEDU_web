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
use MPG;

class SPGController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function login($id)
  {
      return redirect('/course/' . $id);
  }

  // Spgateway pay
  public function pay($id, Request $request)
  {
    $course = Course::findOrFail($id);
    $uid = \Auth::user()->id;
    $time_stamp = date("YmdHis_").gettimeofday()["usec"];;

    $check_exist = Enroll::where('user_id', $uid)
                          ->where('course_id', $course->id)
                          ->count();
    if($check_exist)
    {
        Session::flash('info', '已購買過此課');
        return redirect()->back();
    }

    if( session()->has('coupon') )
    {
      $final_price = 1.1*$course->price - session()->get('coupon')['discount'];
    }
    else
    {
      $final_price = 1.1*$course->price;    // 1.1=>service fees
    }

    // Store transaction data into Table:transaction
    if( session()->has('coupon') )
    {
      $transaction = Transaction::create([
        'user_id' => $uid,
        'course_id' => $course->id,
        'purchase_price' => $final_price,
        'channel' => 'spgateway',
        'coupon_code' => session()->get('coupon')['name'],
        'merchant_order_no' => $time_stamp,
        'transaction_status' => 'PENDING'
      ]);
    }
    else
    {
      $transaction = Transaction::create([
        'user_id' => $uid,
        'course_id' => $course->id,
        'purchase_price' => $final_price,
        'channel' => 'spgateway',
        'coupon_code' => null,
        'merchant_order_no' => $time_stamp,
        'transaction_status' => 'PENDING'
      ]);
    }

    $params = array('MerchantOrderNo' => $time_stamp, 
    'OrderComment' => $id, 
    'ReturnURL' => 'http://13.115.120.244/spgreturn',
    'NotifyURL' => 'http://13.115.120.244/spgnotify');
  
    $order = MPG::generate(
      $final_price,
      \Auth::user()->email,
      $course->title,
      $params
    );
    return $order->send();
  }

  // Spgateway payment NotifyURL callback
  public function notify(Request $request)
  {
    $tradeInfo = MPG::parse(request()->TradeInfo);
    $order_no = $tradeInfo->Result->MerchantOrderNo;
    $order = Transaction::where('merchant_order_no', $order_no)->first();
    $order->transaction_status = $tradeInfo->Status;
    if($tradeInfo->Status == 'SUCCESS')
    {  
      // Update enroll number in Table: Course
      $course = Course::where('id', $order->course_id)->first();
      $uid = $order->user_id;
      $user = User::where('id', $uid)->first();
      $course->enroll_num ++;
      $course->save();

      // Store into Table: enroll
      $enroll = Enroll::create([
        'course_id' => $course->id,
        'user_id' => $uid
      ]);
      
      // Mail order payment info
      $data = array(
        'nick_name' => $user->nick_name,
        'course_name' => $course->title,
        'course_price' => $tradeInfo->Result->Amt,
        'from_date' => $course->from_date
      );
      
      Mail::to($user->email)->bcc('b816132@gmail.com')->send(new \App\Mail\PurchaseSuccessful($data));
    }
    
    $order->info = response()->json($tradeInfo);
    $order->save();
  }

  // Spgateway payment ReturnURL callback
  public function return(Request $request)
  {
    $payment_result = request()->Status;
    $tradeInfo = MPG::parse(request()->TradeInfo);
    $order_no = $tradeInfo->Result->MerchantOrderNo;
    $order = Transaction::where('merchant_order_no', $order_no)->first();
    if($payment_result == 'SUCCESS')
    { 
      return redirect()->route('PurchaseSuccessful');
    }else{
      Session::flash('warning', '成功失敗，請至信箱確認');
      return redirect('/course/' . $order->course_id);
    }
  }
}
