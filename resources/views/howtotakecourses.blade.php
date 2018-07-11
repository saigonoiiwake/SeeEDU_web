@extends('layouts.app')

@section('welcome_style')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="">
	<meta name="keywords" content="上課方式">
	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="app/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/pix_style.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/main.min.css"/>
	<link rel="stylesheet" type="text/css" href="app/css/font-style.min.css" />
	<link href="app/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/ie-fix.css" />
	<![endif]-->
	<title>上課方式</title>
	<style type="text/css" id="pix_page_style"></style>
@stop

@section('content')



<div class="pix_section pix-padding" id="section_titles_1" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><strong>上課方式</strong></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text">手機、平板、電腦都可以上課，教室就該無拘無束</span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>
<div class="pix_section gray-bg pix-padding" id="section_videos_1" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 col-sm-1 column ui-droppable col-md-1">
    </div>
    <div class="col-md-10 col-xs-12 col-sm-10 column ui-droppable">
     <div class="pix-content"><div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://player.vimeo.com/video/96847806" width="640" height="360"></iframe>
     </div></div>
    </div>
   </div>
  </div>
 </div>


<div class="pix_section pix-padding-v-85" id="section_call_to_action_2" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content text-center">
      <h4 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span style="font-weight: 700;">SeeEDU使用ZOOM通訊軟體</span></span>
      </h4>
      <h6 class="pix-black-gray-light text-center pix-margin-bottom-20">
       <span class="pix_edit_text">給您最優質的線上互動體驗</span>
      </h6>
      <a href="https://zoomnow.net/zntw_zoom_download.php?showType=ALL" class="btn green-bg pix-white wide btn-lg normal" style="background-color: rgb(66, 157, 235);">
       <span class="pix_edit_text" target="_blank"><strong>下載ZOOM</strong></span>
      </a>
     </div>
    </div>
   </div>
  </div>
 </div>
<!-- Javascript -->
<script src="app/js/jquery-1.11.2.js"></script>
<script src="app/js/jquery-ui.js"></script>
<script src="app/js/bootstrap.min.js"></script>
<script src="app/js/velocity.min.js"></script>
<script src="app/js/velocity.ui.min.js"></script>
<script src="app/js/appear.min.js" type="text/javascript"></script>
<script src="app/js/animations.min.js" type="text/javascript"></script>
<script src="app/js/plugins.js" type="text/javascript"></script>
<script src="app/js/jquery.fancybox.min.js" type="text/javascript"></script>
<script src="app/js/custom.min.js"></script>

@stop
