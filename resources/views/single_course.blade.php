@extends('layouts.app')

@section('course_style')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
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
@endsection

@section('content')



<div class="pix_section pix-padding-v-85 gray-bg" id="section_videos_2" style="display: block;">
  <div class="container">
   <div class="row">


    <div class="col-md-8 col-xs-12 col-sm-8 column ui-droppable">
     <div class="pix-content">
      <div class="embed-responsive embed-responsive-16by9 pix-margin-v-20">
       <iframe src="https://player.vimeo.com/video/203287009?color=f7941d&amp;title=0&amp;byline=0&amp;portrait=0" width="640" height="360"></iframe>
      </div>
     </div>
    </div><div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable" style="display: block;">
     <div class="pix-content text-left pix_feature_std pix_light_gray_border white-bg">
      <div class="pix-padding-h-10">
       <div class="pix-padding-v-9">
        <i class="pixicon-video2 big-icon-55 pix-slight-white"></i>
       </div>
       <h5 class="pix-black-gray-dark secondary-font">
        <span class="pix_edit_text"><strong>商用日語暑期衝刺班</strong></span>
       </h5>
       <div class="pix-margin-bottom-15"><h6><span class="pix_edit_text"><span class="label label-default pix-black-gray-light gray-bg">商用</span></span></h6></div>
       <p class="pix-black-gray-light big-text">
         <span class="pix_edit_text">
          這門課適合想要去日本發展職涯，或是工作中會接觸到日本客戶的學生
         </span>
       </p>
       <a href="#" class="btn btn-sm orange-bg btn-round-lg pix-white pix-margin-bottom-10 pix-margin-right-10 wide pix-margin-top-10 secondary-font">
         <span class="pix_edit_text">
          <strong>加入購物車</strong>
         </span>
       </a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>



 <div class="container">
   <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
     <li class="active"><a href="#Commentary" data-toggle="tab">課程介紹</a></li>
     <li><a href="#Videos" data-toggle="tab">心得感想</a></li>
     <li><a href="#Events" data-toggle="tab">討論區</a></li>
   </ul>
   <div class="tab-content">
     <div role="tabpanel" class="tab-pane fade in active" id="Commentary">
			 <div class="pix_section pix-padding-v-40" id="section_testimonials_1" style="display: block;">
			   <div class="container">
			    <div class="row">

			     <div class="col-md-1 col-xs-12 col-sm-1 column ui-droppable">
			     </div>
			     <div class="col-md-10 col-xs-12 col-sm-10 column ui-droppable">
			      <div class="pix-content pix-padding-bottom-30 pix-margin-v-30">
			       <div class="media">
			        <div class="media-right media-top text-center media-box-area">
			         <div class="pix-inner">
			          <div class="pix-round-shape-120 pix-margin-h-10">
			           <img src="app/images/startup/client-1.jpg" alt="">
			          </div>
			         </div>
			        </div>
			        <div class="media-body media-top media-box-area">
			         <div class="pix-inner">
			          <p class="pix-black-gray-light big-text-20 pix-margin-bottom-20">
			           <span class="pix_edit_text">" Lorem ipsum dolor sit amet consectet adipiscing elit sed do moda tempo incididunt ut labore et dolore magnar aliqua. "</span>
			          </p>
			          <h5 class="pix-black-gray pix-no-margin-top pix-no-margin-bottom">
			           <span class="pix_edit_text"><span style="font-weight: 700;">Hiroshi老師</span></span>
			          </h5>
			          <h6 class="pix-black-gray-light pix-no-margin-top">
			           <span class="pix_edit_text">口譯、台大電機、語言學習愛好者</span>
			          </h6>
			         </div>
			        </div>
			       </div>
			      </div>
			     </div>
			    </div>
			   </div>
			  </div>
		 </div>

     <div role="tabpanel" class="tab-pane fade" id="Videos">
			 心得感想
		 </div>
     <div role="tabpanel" class="tab-pane fade" id="Events">
			 @include('includes.disqus')
		 </div>

   </div>
 </div>

 @include('includes.footer')

@endsection
