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
@endsection
