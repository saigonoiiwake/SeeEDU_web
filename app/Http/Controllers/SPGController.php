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
  private $serverUrl;
  private $testServerIP = "13.115.120.244";

  public function __construct()
  {
      $this->middleware('auth', ['except'=>'notify']);
      if (env('APP_ENV') === 'production') {
        $this->serverUrl = 'https://seeedu.org';
      } else {
        $this->serverUrl = 'http://' . $this->testServerIP;
      }
  }

  public function login($id)
  {
      return redirect('/course/' . $id);
  }

  // free class skip SPGateway
  public function freeClass($id)
  {
    DB::beginTransaction();

    try { 
      $course = Course::findOrFail($id);
      if($course->price > 0.0){
        Session::flash('warning', '此課程未設定為免費課程，請聯繫客服人員');
        return redirect()->back();
      }

      $uid = \Auth::user()->id;
      $user = User::where('id', $uid)->first();

      $check_exist = Enroll::where('user_id', $uid)
                            ->where('course_id', $course->id)
                            ->count();

      if($check_exist)
      {
          Session::flash('info', '已購買過此課');
          return redirect()->back();
      }

      // new transaction
      $transaction = Transaction::create([
        'user_id' => $uid,
        'course_id' => $course->id,
        'purchase_price' => 0,
        'channel' => 'free',
        'coupon_code' => null,
        'transaction_status' => Transaction::STATUS_SUCCESS
      ]);

      // Update enroll number in Table: Course
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
        'course_price' => 0,
        'from_date' => $course->from_date
      );
      
      Mail::to($user->email)->bcc('b816132@gmail.com')->send(new \App\Mail\PurchaseSuccessful($data));

      DB::commit();
    }catch (Exception $e) {
      DB::rollback();
      report($e);
      return false;
    }

    return redirect()->route('PurchaseSuccessful');
  }

  // Spgateway pay
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

    if( session()->has('coupon') )
    {
      $final_price = $course->price - session()->get('coupon')['discount'];
    }
    else
    {
      $final_price = $course->price;
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
        'transaction_status' => Transaction::STATUS_PENDING
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
        'transaction_status' => Transaction::STATUS_PENDING
      ]);
    }

    // MerchantOrderNo shouldn't be too simple cause SPGateway any MerchantOrderNo will only accept once in one store, 
    // If someday we rollback or use a new table, row ids let's said begin from 0 will be already exist in SPGateway system and won't be accept anymore.
    // It already happened during testing, cause I connect to different DB after deploy to aws.
    // So I use $transaction->created_at . "_" . $transaction->id as MerchantOrderNo now to ensure that won't happen in the future.

    $params = array('MerchantOrderNo' => date("YmdHis", strtotime($transaction->created_at)) . "_" . $transaction->id,  
    'OrderComment' => $id, 
    'ReturnURL' => $this->serverUrl . '/spg/return',
    'NotifyURL' => $this->serverUrl . '/spg/notify');
  
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
    $merchantOrderNo = explode("_", $tradeInfo->Result->MerchantOrderNo);
    $order_no = $merchantOrderNo[1];
    
    if($tradeInfo->Status == 'SUCCESS')
    { 
      DB::beginTransaction();
      try { 
        // Query Order
        $order = Transaction::where('id', $order_no)->first();
        $order->transaction_status = Transaction::STATUS_SUCCESS;
        $order->info = response()->json($tradeInfo);
        $order->save();

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

        DB::commit();
      }catch (Exception $e) {
        DB::rollback();
        report($e);
        return false;
      }
    }else{
      DB::beginTransaction();
      try { 
        // Query Order
        $order = Transaction::where('id', $order_no)->first();
        $order->transaction_status = Transaction::STATUS_FAILED;
        $order->info = response()->json($tradeInfo);
        $order->save();
        
        DB::commit();
      }catch (Exception $e) {
        DB::rollback();
        report($e);
        return false;
      }
    }
  }

  // Spgateway payment ReturnURL callback
  public function return(Request $request)
  {
    $payment_result = request()->Status;
    $tradeInfo = MPG::parse(request()->TradeInfo);
    $order_no = $tradeInfo->Result->MerchantOrderNo;
    $order = Transaction::where('id', $order_no)->first();
    if($payment_result == 'SUCCESS')
    { 
      return redirect()->route('PurchaseSuccessful');
    }else{
      Session::flash('warning', '付款失敗，請至信箱確認');
      return redirect('/course/' . $order->course_id);
    }
  }
}
