@extends('layouts.app')

@section('styles')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="">
	<meta name="keywords" content="上課方式">
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
	<title>上課方式</title>
	<style type="text/css" id="pix_page_style"></style>
@stop

@section('content')

<br>
<br>


<div class="pix_section gray-bg pix-padding" id="section_videos_1" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 col-sm-1 column ui-droppable col-md-1">
    </div>
    <div class="col-md-10 col-xs-12 col-sm-10 column ui-droppable">
     <div class="pix-content"><div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.youtube.com/embed/epQJXmi5onw" width="640" height="360"></iframe>
     </div></div>
    </div>
   </div>
  </div>
 </div>


 <div class="pix_section pix-padding-v-30" id="section_features_2" style="display: block; background-color: rgb(252, 252, 252); background-repeat: repeat-x; padding-top: 0px; padding-bottom: 30px;">
  <div class="container">
 	<div class="row">

 		<div class="col-sm-1 column ui-droppable col-md-1"></div>

 	 <div class="col-xs-12 col-sm-2 column ui-droppable col-md-2">
 		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
 			<img src="app/images/illustrations/下載zoom.png" alt="" class="img-responsive">
 		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
 			<span class="pix_edit_text"><strong>下載zoom</strong></span>
 		 </h5>
 		</div>
 	 </div>

 	 <div class="col-xs-12 col-sm-2 column ui-droppable col-md-2">
 		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
 			<img src="app/images/illustrations/進入直播.png" alt="" class="img-responsive">
 		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
 			<span class="pix_edit_text"><strong>進入直播</strong></span>
 		 </h5>
 		</div>
 	 </div>


 	 <div class="col-xs-12 col-sm-2 column ui-droppable col-md-2">
 		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
 			<img src="app/images/illustrations/開啟視訊.png" alt="" class="img-responsive">
 		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
 			<span class="pix_edit_text"><strong>開啟視訊</strong></span>
 		 </h5>
 		</div>
 	 </div>

 	 <div class="col-xs-12 col-sm-2 column ui-droppable col-md-2">
 		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
 			<img src="app/images/illustrations/舉手發問.png" alt="" class="img-responsive">
 		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
 			<span class="pix_edit_text"><strong>舉手發問</strong></span>
 		 </h5>
 		</div>
 	 </div>

 	 <div class="col-xs-12 col-sm-2 column ui-droppable col-md-2">
 		<div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
 			<img src="app/images/illustrations/傳訊討論.png" alt="" class="img-responsive">
 		 <h5 class="pix-black-gray-dark pix-no-margin-bottom">
 			<span class="pix_edit_text"><strong>傳訊討論</strong></span>
 		 </h5>
 		</div>
 	 </div>

 		<div class="col-sm-1 column ui-droppable col-md-1"></div>

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
      <a href="https://zoomnow.net/zntw_zoom_download.php?showType=ALL" class="btn green-bg pix-white wide btn-lg normal"  target="_blank" style="background-color: rgb(66, 157, 235);">
       <span class="pix_edit_text"><strong>免費下載</strong></span>
      </a>
     </div>
    </div>
   </div>
  </div>
 </div>

@include('includes.footer')


@endsection
