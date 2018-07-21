@extends('layouts.app')

@section('styles')

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

@stop

@section('content')
<div class="pix_section pix-padding" id="section_content_1" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 text-center col-sm-8 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content"><img src="http://res.cloudinary.com/sabina123/image/upload/c_scale,w_450/v1531205782/開課指引-05.png" alt="" class="img-responsive"></div>
    </div>
    <div class="col-xs-12 col-sm-4 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content pix-padding-top-120" style="background-repeat: repeat-x; padding: 80px 0px 0px; margin: 0px;">
      <h4 class="pix-black-gray-dark pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span style="font-weight: 700;">已送出審查</span></span>
      </h4>
      <p class="pix-black-gray-light big-text pix-margin-bottom-20">
       <span class="pix_edit_text"><span>課程編號 ＃{{ $id }}</span><br><span><span><br></span></span><span><span>審核結果將在10個工作天內出爐，有任何疑問歡迎告知線上客服人員您的課程編號，可加速解決您的疑問。</span></span></span>
      </p>

     </div>
    </div>
   </div>
  </div>
 </div>

@include('includes.footer')

@endsection
