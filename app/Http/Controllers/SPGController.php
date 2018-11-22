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
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

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
<<<<<<< HEAD
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
=======
    // $order_no = $tradeInfo->Result->MerchantOrderNo;
    // $order = Transaction::where('merchant_order_no', $order_no)->first();
    // if($tradeInfo->Status == 'SUCCESS')
    // {  
    //   $order->transaction_status = $tradeInfo->Status;
    //   // Update enroll number in Table: Course
    //   $course = Course::where('id', $order->course_id)->first();
    //   $uid = $order->user_id;
    //   $user = User::where('id', $uid)->first();
    //   $course->enroll_num ++;
    //   $course->save();
>>>>>>> 72a90cd3edb309b27f27d93bd1c905fa00d59925

    //   // Store into Table: enroll
    //   $enroll = Enroll::create([
    //     'course_id' => $course->id,
    //     'user_id' => $uid
    //   ]);
      
    //   // Mail order payment info
    //   $data = array(
    //     'nick_name' => $user->nick_name,
    //     'course_name' => $course->title,
    //     'course_price' => $tradeInfo->Result->Amt,
    //     'from_date' => $course->from_date
    //   );
      
    //   // Mail::to('john80510@gmail.com')->send(new \App\Mail\PurchaseSuccessful($data));

<<<<<<< HEAD
      Mail::to($user->email)->bcc('john80510@gmail.com')->send(new \App\Mail\PurchaseSuccessful($data));
    }
    
=======
    //   Mail::to($user->email)->bcc('john80510@gmail.com')->send(new \App\Mail\PurchaseSuccessful($data));
    // }else{
    //   $order->transaction_status = $tradeInfo->Status;
    // }
    $order = Transaction::orderBy('created_at', 'desc')->first();
>>>>>>> 72a90cd3edb309b27f27d93bd1c905fa00d59925
    $order->info = response()->json($tradeInfo);
    $order->save();
  }

  public function parse()
  {
    $info = 'e2faaab427e3857acd5ddab34cbbe0e135998fa17fc66ab2e5b1960e7eb09bfe89d49eb8e2fe92a1b73df25ab3c63ef3c6ee13c9266d650d099b8eb425be6de7cf65869402a54d41822611d7d0da5af2413b02b3a6345c5a2194bdba50da00009b3c36870959fca183fdc8aa48a75b8d23cb59b0019e6439b9c1795ec08839d9be0d7aff9d061b2ccc31be05605b23c93629dce75f776be3db704069a171c2ae32308ef200b71d6b694f10b3ef0c297222a99964c4845baf7099aa0c19ef348b86acb27592cf33ea94961e01507c39202c1078ff80ef357ce532432e43f74f12375c3638b875f2a2bc2ce00e2cfdc93ef131234800b1ff0f805d82049858125ff82c20fa4b43c961818d9e253c3e81a91228b130300289b8ae71a1f29eac88b274136615eeafc874e0cb9bac2009d5aba342101de5966e00162f0051dada37957b31470084efb57b3d022590f2db41d4f48433d2bd34ed90864a839663fa209d83523e610c86dcaea77a058d1283192d484e515d8859f6d6a6ee9bad1e3858988954210505abe16f60d1c5bc4acb833aed2b3fb018d143facd63e29056562fcf70b9230864410d387a3eb2e8731a64a12a21a43fd4f42314c1aa6bbd213b348ac55f9e94444ef3be193274270fd69317bbf604253f5c40f3f6f2b99646b1ccb5';
    $tradeInfo = MPG::parse($info);
    $order_no = $tradeInfo->Result->MerchantOrderNo;
    $order = Transaction::where('merchant_order_no', $order_no)->first();
    if($tradeInfo->Status == 'SUCCESS')
    {  
      $order->transaction_status = $tradeInfo->Status;
    }else{
      $order->transaction_status = $tradeInfo->Status;
    }
    // $order = Transaction::orderBy('created_at', 'desc')->first();
    // $order->info = request()->TradeInfo;
    $order->save();
    // dd($tradeInfo);
    // return response()->json($tradeInfo);
    // dd($tradeInfo->Result->MerchantOrderNo);
    // return $tradeInfo;
  }

  // Spgateway payment ReturnURL callback
  public function return(Request $request)
  {
    $payment_result = request()->Status; // $_POST['Status'];
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
