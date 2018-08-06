@extends('layouts.app')


@section('styles')
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.fancybox.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/pix_style.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/main.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-style.min.css') }}" />
	<link href="{{ asset('app/css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/ie-fix.css" />
	<![endif]-->

@endsection

@section('content')
	<br>
	<br>

	<style type="text/css" id="pix_page_style"></style>

<div class="pix_section pix-padding-v-40 gray-bg" id="section_faq_1" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-20 text-center">
      <h2 class="pix-black-gray-dark pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><strong>常見問題</strong></span>
      </h2>
      <div><span class="pix-bar blue-bg pix-margin-bottom-20 pix-margin-top-10"></span></div>
      <p class="pix-black-gray-light big-text-20 pix-small-width-text">
       <span class="pix_edit_text">任何問題都歡迎與線上客服人員聯絡！</span>
      </p>
     </div>
    </div>
    <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>1. 錯過直播上課的時間，可以補課嗎?</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">        可以！每堂課都有保留錄影檔，讓同學補課、複習沒煩惱，錯過重點也可以再次溫習。        </span>
      </p>
     </div>
    </div>
    <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>2. 我要如何上直播課程呢？</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
				 上課前，下載視訊軟體zoom，接著，只要在上課前10分鐘，在「email信箱」或是「我的課表」頁面點選進入教室，就可以順利上課囉！
       </span>
      </p>
     </div>
    </div>
    <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>3. 直播上課的設備要求為?</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
				 無論是使用智慧型手機、平板或是電腦，都可以上課，建議使用耳機(有麥克風功能)上課，老師也能更清楚聆聽你/妳的問題。

       </span>
      </p>
     </div>
    </div>
    <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>4. 退費機制?</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
				 購課學員可以在該門課第一堂課後的七天內提出退費或換課申請。如有退費需求請聯繫線上課服人員。

       </span>
      </p>
     </div>
    </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>5. 購買課程要如何付款呢？</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
        目前提供信用卡付款，不在台灣的同學也可以方便付款喔！其他付款方式請洽詢線上客服小幫手。
       </span>
      </p>
     </div>
    </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>6. 如果遇到國定假日或是天災是否放假？</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
        如果因為老師身體不適、天災等不可抗因素需要調課，系統將自動發出通知信通知學生。
       </span>
      </p>
     </div>
    </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>7. 如何申請退費？</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
				 請來信 service@seeedu31.com 與我們聯繫，信件主旨請寫：「申請退費_課程名稱」，SeeEDU會協助你處理後續退費流程。

       </span>
      </p>
     </div>
    </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>8. 第一次使用SeeEDU，如何註冊?</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
				 SeeEDU提供「FB帳號」、「Google帳號」及「E-mail帳號」三種註冊方式，請點選首頁右上方「登入/註冊」，即可開始註冊帳號。

       </span>
      </p>
     </div>
    </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>9. 忘記密碼怎麼辦？</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
					 請聯繫線上課服人員專案處理。(客服時段：週一至週五 11:00-18:00，例假日及國定假日則暫停服務)

       </span>
      </p>
     </div>
    </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>10. 請問是線上真人上課嗎?</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
        是的，SeeEDU的課程皆為直播課程，因此在上課過程中，有問題隨時都能發問喔！我們也鼓勵同學多多與老師互動，並打開視訊及利用「舉手」功能發問。
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>

 @include('includes.footer')

 @endsection
