@extends('layouts.app')

@section('styles')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="讓知識創造最高價值">
	<meta name="keywords" content="開課流程介紹
優秀老師
最高價值
最高收入
教學
日語
英語
韓語
西班牙語
美語
補習班
線上課程
立即開課">
開課流程介紹
SeeEDU提供優秀老師一個最佳的舞台	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.fancybox.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/pix_style.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/main.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-style.min.css') }}" />
	<link href="{{ asset('app/css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />
@stop

@section('content')
<div class="pix_section pix-padding" id="section_titles_1" style="display: block;">
 <div class="container">
  <div class="row">
   <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
    <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
     <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
      <span class="pix_edit_text"><span style="font-weight: 700;">開課流程介紹</span></span>
     </h2>
     <p class="pix-black-gray-light big-text text-center">
      <span class="pix_edit_text">SeeEDU提供給優秀老師最佳的舞台</span>
     </p>
    </div>
   </div>
  </div>
 </div>
</div><div class="pix_section pix-padding" id="section_content_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 60px;">
 <div class="container">
  <div class="row">
   <div class="col-xs-12 text-center col-sm-8 column ui-droppable col-md-6" style="display: block;">
    <div class="pix-content"><img src="app/images/illustrations/開課說明.png" alt="" class="img-responsive"></div>
   </div>
   <div class="col-xs-12 col-sm-4 column ui-droppable col-md-6" style="display: block;">
    <div class="pix-content pix-padding-top-120" style="background-repeat: repeat-x; padding: 80px 0px 0px; margin: 0px;">
     <h4 class="pix-black-gray-dark pix-no-margin-top secondary-font">
      <span class="pix_edit_text"><span><strong>讓知識創造最高價值</strong></span></span>
     </h4>
     <p class="pix-black-gray-light big-text pix-margin-bottom-20">
      <span class="pix_edit_text">原生網路世代將重新定義教育<br><span>將所學教授給學生，帶給學生們最寶貴的價值</span></span>
     </p>
     <a href="{{ route('open_courses_1') }}" class="btn green-blue-bg pix-white normal btn-lg pix-line" style="background: transparent; border-color: rgb(66, 157, 235); color: rgb(66, 157, 235);">
      <span class="pix_edit_text">
       <strong>立即開課</strong></span>
     </a>
    </div>
   </div>
  </div>
 </div>
</div>

<div class="pix_section pix-padding-v-30" id="section_features_2" style="display: block; background-color: rgb(252, 252, 252); background-repeat: repeat-x; padding-top: 0px; padding-bottom: 30px;">
 <div class="container">
	<div class="row">


	 <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
			<img src="app/images/illustrations/登入會員.png" alt="" class="img-responsive">
		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
			<span class="pix_edit_text"><strong>登入會員</strong></span>
		 </h5>
		</div>
	 </div>

	 <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
			<img src="app/images/illustrations/填寫老師基本資料.png" alt="" class="img-responsive">
		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
			<span class="pix_edit_text"><strong>老師資訊</strong></span>
		 </h5>
		</div>
	 </div>


	 <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
			<img src="app/images/illustrations/填寫課程基本資料.png" alt="" class="img-responsive">
		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
			<span class="pix_edit_text"><strong>課程資料</strong></span>
		 </h5>
		</div>
	 </div>

	 <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
			<img src="app/images/illustrations/簽訂合約.png" alt="" class="img-responsive">
		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
			<span class="pix_edit_text"><strong>簽訂合約</strong></span>
		 </h5>
		</div>
	 </div>

	 <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
			<img src="app/images/illustrations/等待審查.png" alt="" class="img-responsive">
		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
			<span class="pix_edit_text"><strong>等待審查</strong></span>
		 </h5>
		</div>
	 </div>

	 <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
			<img src="app/images/illustrations/成功開課.png" alt="" class="img-responsive">
		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
			<span class="pix_edit_text"><strong>成功開課</strong></span>
		 </h5>
		</div>
	 </div>


	 </div>
	</div>
 </div>


<div class="pix_section pix-padding" id="section_content_2" style="display: block;">
 <div class="container">
  <div class="row">
   <div class="col-md-6 col-xs-12 text-center col-sm-6 column ui-droppable">
    <div class="pix-content"><img src="http://res.cloudinary.com/sabina123/image/upload/c_scale,w_350/v1531225020/All_外框-15.png" alt=""></div>
   </div><div class="col-xs-12 col-sm-6 column ui-droppable col-md-6" style="display: block;">
    <div class="pix-content pix-padding-top-60">
     <h2 class="pix-black-gray-dark pix-no-margin-top secondary-font">
      <span class="pix_edit_text"><strong>分潤政策</strong></span>
     </h2>
     <h5 class="pix-no-margin-top pix-orange">
      <span class="pix_edit_text">單純的分潤政策</span>
     </h5>
     <p class="pix-black-gray-light big-text pix-margin-bottom-20">
      <span class="pix_edit_text">        教師可自行訂定<span style="font-weight: bold;">課程價格</span>，SeeEDU平台上顯示之<span style="font-weight: bold;">課程平台售價</span>為課程價格的1.1倍，成功開課並達成最低學生數，教師的收入為<span style="font-weight: bold;">（課程價格）☓&nbsp; &nbsp;(購課人數）☓&nbsp; 80%</span></span>
     </p>
     <a href="{{ route('open_courses_1') }}" class="btn pix-orange-line wide normal btn-lg pix-line" style="background: transparent; border-color: rgb(66, 157, 235); color: rgb(66, 157, 235);">
      <span class="pix_edit_text">
       <strong>立即開課</strong></span>
     </a>
    </div>
   </div>
  </div>
 </div>
</div>

@include('includes.footer')


@endsection
