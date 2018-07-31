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
       <span class="pix_edit_text">        可以！每堂課都有保留錄影檔，讓同學補課、複習沒煩惱。        </span>
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
				 無論是使用智慧型手機、平板或是電腦，都可以上課，另外，為了有更好的視聽品質，強烈建議使用耳機(有麥克風功能)上課，老師也能更清楚聆聽你/妳的問題。

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
				 購課學員可以在該門課第一堂課後的七天內提出退費或換課申請。

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
        目前提供信用卡付款，其他付款方式請洽詢線上客服小幫手。
       </span>
      </p>
     </div>
    </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
     <div class="pix-content pix-padding-top-30">
      <h5 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text"><strong>6. 我不在台灣，也可以購買課程嗎？</strong></span>
      </h5>
      <p class="pix-black-gray-light pix-margin-bottom-20 big-text">
       <span class="pix_edit_text">
        可以的！請使用信用卡付款。
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
				 請透過客服信箱 service@seeedu31.com 與我們聯繫，信件主旨請寫：「申請退費_課程名稱」、信件內容請提供「訂單編號」，SeeEDU的夥伴會協助你處理後續退費流程。(客服時段：週一至週五 11:00-18:00，例假日及國定假日則暫停服務)

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
					 依據一開始註冊方式不同，取回密碼的方式有以下兩種：
					 (1) 如果你是以「SeeEDU 會員E-mail」方式登入，請告知客服人員「忘記密碼」，我們將會寄送一組「新密碼」到你的信箱，變更希望設定的密碼。
					 (2) 如你是以「FB帳號」方式登入，請至FB平台點選「忘記密碼」，依FB給的指示流程取得FB的新密碼，登入FB平台後透過SeeEDU的「使用Facebook登入」登入SeeEDU就可以了。

					 *提醒：若您申請忘記密碼後，E-mail收件匣沒有收到「新密碼」信件，請您前往垃圾信件匣查詢看看唷！

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
