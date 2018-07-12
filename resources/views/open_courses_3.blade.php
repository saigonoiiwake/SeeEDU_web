@extends('layouts.app')

@section('course_open_style')

<meta name="description" content="">
<meta name="keywords" content="">
	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="app/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/pix_style.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/main.min.css"/>
	<link rel="stylesheet" type="text/css" href="app/css/font-style.min.css" />
	<link href="app/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />


@stop

@section('content')
<div class="pix_section pix-padding" id="section_titles_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span style="font-weight: 700;">立即開課</span></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text"><span style="font-size: 24px;">Step 3</span></span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div><div class="pix_section pix-padding" id="section_content_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 text-center col-sm-8 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content"><img src="http://res.cloudinary.com/sabina123/image/upload/c_scale,w_350/v1531221312/All_外框-27.png" alt="" class="img-responsive"></div>
    </div>
    <div class="col-xs-12 col-sm-4 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content pix-padding-top-120" style="background-repeat: repeat-x; padding: 80px 0px 0px; margin: 0px;">
      <h4 class="pix-black-gray-dark pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span style="font-weight: 700;">簽訂合約</span></span>
      </h4>
      <p class="pix-black-gray-light big-text pix-margin-bottom-20">
       <span class="pix_edit_text">合約可以保障雙方權益，簽署完，服務人員即會開始審查，10個工作天內會告知審查結果，在這期間有任何問題客服人員都會盡力協助您。<br><span><br></span></span>
      </p>

     </div>
    </div>
   </div>
  </div>
 </div>

<div class="col-md-8 col-md-offset-2">


  <div class="panel panel-default">
 	 <div class="panel-heading">
 			合約內容
 	 </div>
	 <div class="panel-body">
		 <div class="form-group" >

		 </div>
	 </div>
	 <div class="panel-footer">
		 <a href="{{ route('welcome') }}"><button class="btn btn-default" type="submit">暫存離開</button></a>
		 <a href="{{ route('open_courses_2') }}"><button class="btn btn-info" type="submit">上一步</button></a>
		 <a href="{{ route('open_courses_4') }}"><button class="btn btn-success col-md-8" type="submit">送出審查</button></a>
	 </div>
 </div>

</div>

@include('includes.footer')

@stop

@section('course_open_scripts')



@stop
