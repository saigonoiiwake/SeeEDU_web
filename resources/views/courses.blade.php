@extends('layouts.app')

@section('course_style')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="不斷學習，是一種生活態度！
SeeEDU Live School 讓學習把我們連結在一起，透過互動式直播課程，學習可以無所不在，錯過直播也不用擔心，每堂課都有錄影，讓你無限次觀看、複習，更棒的是！能夠和志同道合的同學們一起分享、討論，學習變成一件最有趣的事！ ">
	<meta name="keywords" content="日檢
課程
多益
日語
會話班
Hiroshi老師
日本留學
美國留學
托福
 toefl
雅思">
探索課程
不斷學習，是一種生活態度！	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="app/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/pix_style.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/main.min.css"/>
	<link rel="stylesheet" type="text/css" href="app/css/font-style.min.css" />
	<link href="app/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

<style>

    @charset "UTF-8";
    * {
      font-family: 微軟正黑體;
    }

    html, body {
      margin: 0;
      padding: 0;
    }

    .classbox {
      width: 260px;
      padding: 15px;
      padding-bottom: 0px;
      box-sizing: border-box;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.2);
      position: relative;
      cursor: pointer;
      display: inline-block;
      margin: 25px 45px;
      text-align: left;
      text-decoration: none;
    }
    .classbox:hover .classpicture {
      transform: scale(1.15);
    }
    .classbox:hover .bookbtn {
      bottom: 10px;
    }
    .classbox .top {
      height: 220px;
      border-radius: 5px 5px 0px 0px;
      margin: -15px;
      margin-bottom: 0px;
      overflow: hidden;
      position: relative;
    }
    .classbox .top .classpicture {
      width: 100%;
      height: 100%;
      position: absolute;
      background-image: url(https://res.cloudinary.com/sabina123/image/upload/v1530271405/samples/animals/kitten-playing.gif);
      background-size: cover;
      transition-duration: 0.3s;
    }

    .teacherpic {
      position: absolute;
      width: 60px;
      height: 60px;
      background-size: cover;
      border: solid 2px white;
      border-radius: 100%;
      box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.12);
      z-index: 10;
      right: 5px;
      bottom: 115px;
    }

    .tag {
      width: 80px;
      height: 25px;
      position: absolute;
      color: white;
      top: 20px;
      left: -40px;
      padding-top: 5px;
      text-align: center;
      background-color: #398DD5;
      border-radius: 15px;
      box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5);
    }

    .teacher_name, .student_number {
      font-size: 15px;
      display: inline-block;
      color: #C3C3C3;
    }

    .student_number {
      font-weight: 300;
      position: absolute;
      right: 20px;
    }

    .progressbar {
      height: 10px;
      border-radius: 5px;
      overflow: hidden;
      background-color: rgba(0, 0, 0, 0.12);
    }
    .progressbar .valuebar {
      background-color: #398DD5;
      width: 80px;
      height: 100%;
      transition-duration: 1s;
    }

    .view_number, .price {
      display: inline-block;
    }

    .view_number {
      font-weight: 300;
      font-size: 15px;
      margin: 10px 0px;
      color: #C3C3C3;
    }

    .classtitle, .price {
      color: #434343;
    }

    .price {
      font-size: 15px;
      posiiton: relative;
      margin-left: 10px;
    }


</style>
@stop

@section('content')

<div class="pix_section pix-padding" id="section_titles_1" style="display: block; background-repeat: repeat-x; padding-top: 60px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span style="font-weight: 700;">探索課程</span></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text">英文&nbsp; 日文</span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="pix_section pix-padding-v-10" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
 	<div class="row">

 	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
 		 <div class="category"></div>
 			 <div class="classbox">
 				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
 					 <div class="top">
 						 <div class="classpicture">
 						 </div>
 					 </div>
 					 <div class="bottom">
 						 <div class="tag">HOT</div>
 						 <div class="text">
 							 <h3 class="classtitle">日文檢定快樂過</h3>
 							 <div class="teacher_name">YOUKA</div>
 							 <div class="student_number">修課人數<span> 18</span></div>
 						 </div>
 						 <div class="progressbar">
 							 <div class="valuebar"></div>
 						 </div>
 					 <div class="view_number">瀏覽量<span> 560</span></div>
 					 <div class="price">課程價格<span>NT$ 8,000</span></div>
 				 </div>
 			 </div>
 	 </div>

 	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
 		 <div class="category"></div>
 			 <div class="classbox">
 				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
 					 <div class="top">
 						 <div class="classpicture">
 						 </div>
 					 </div>
 					 <div class="bottom">
 						 <div class="tag">HOT</div>
 						 <div class="text">
 							 <h3 class="classtitle">日文檢定快樂過</h3>
 							 <div class="teacher_name">YOUKA</div>
 							 <div class="student_number">修課人數<span> 18</span></div>
 						 </div>
 						 <div class="progressbar">
 							 <div class="valuebar"></div>
 						 </div>
 					 <div class="view_number">瀏覽量<span> 560</span></div>
 					 <div class="price">課程價格<span>NT$ 8,000</span></div>
 				 </div>
 			 </div>
 	 </div>

 	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
 		 <div class="category"></div>
 			 <div class="classbox">
 				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
 					 <div class="top">
 						 <div class="classpicture">
 						 </div>
 					 </div>
 					 <div class="bottom">
 						 <div class="tag">HOT</div>
 						 <div class="text">
 							 <h3 class="classtitle">日文檢定快樂過</h3>
 							 <div class="teacher_name">YOUKA</div>
 							 <div class="student_number">修課人數<span> 18</span></div>
 						 </div>
 						 <div class="progressbar">
 							 <div class="valuebar"></div>
 						 </div>
 					 <div class="view_number">瀏覽量<span> 560</span></div>
 					 <div class="price">課程價格<span>NT$ 8,000</span></div>
 				 </div>
 			 </div>
 	 </div>

 	</div>
  </div>
 </div>
 <div class="pix_section pix-padding-v-10" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
	<div class="container">
	<div class="row">

	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
		 <div class="category"></div>
			 <div class="classbox">
				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
					 <div class="top">
						 <div class="classpicture">
						 </div>
					 </div>
					 <div class="bottom">
						 <div class="tag">HOT</div>
						 <div class="text">
							 <h3 class="classtitle">日文檢定快樂過</h3>
							 <div class="teacher_name">YOUKA</div>
							 <div class="student_number">修課人數<span> 18</span></div>
						 </div>
						 <div class="progressbar">
							 <div class="valuebar"></div>
						 </div>
					 <div class="view_number">瀏覽量<span> 560</span></div>
					 <div class="price">課程價格<span>NT$ 8,000</span></div>
				 </div>
			 </div>
	 </div>

	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
		 <div class="category"></div>
			 <div class="classbox">
				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
					 <div class="top">
						 <div class="classpicture">
						 </div>
					 </div>
					 <div class="bottom">
						 <div class="tag">HOT</div>
						 <div class="text">
							 <h3 class="classtitle">日文檢定快樂過</h3>
							 <div class="teacher_name">YOUKA</div>
							 <div class="student_number">修課人數<span> 18</span></div>
						 </div>
						 <div class="progressbar">
							 <div class="valuebar"></div>
						 </div>
					 <div class="view_number">瀏覽量<span> 560</span></div>
					 <div class="price">課程價格<span>NT$ 8,000</span></div>
				 </div>
			 </div>
	 </div>

	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
		 <div class="category"></div>
			 <div class="classbox">
				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
					 <div class="top">
						 <div class="classpicture">
						 </div>
					 </div>
					 <div class="bottom">
						 <div class="tag">HOT</div>
						 <div class="text">
							 <h3 class="classtitle">日文檢定快樂過</h3>
							 <div class="teacher_name">YOUKA</div>
							 <div class="student_number">修課人數<span> 18</span></div>
						 </div>
						 <div class="progressbar">
							 <div class="valuebar"></div>
						 </div>
					 <div class="view_number">瀏覽量<span> 560</span></div>
					 <div class="price">課程價格<span>NT$ 8,000</span></div>
				 </div>
			 </div>
	 </div>

	</div>
	</div>
 </div>

 <div class="pix_section pix-padding-v-10" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
 	<div class="row">

 	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
 		 <div class="category"></div>
 			 <div class="classbox">
 				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
 					 <div class="top">
 						 <div class="classpicture">
 						 </div>
 					 </div>
 					 <div class="bottom">
 						 <div class="tag">HOT</div>
 						 <div class="text">
 							 <h3 class="classtitle">日文檢定快樂過</h3>
 							 <div class="teacher_name">YOUKA</div>
 							 <div class="student_number">修課人數<span> 18</span></div>
 						 </div>
 						 <div class="progressbar">
 							 <div class="valuebar"></div>
 						 </div>
 					 <div class="view_number">瀏覽量<span> 560</span></div>
 					 <div class="price">課程價格<span>NT$ 8,000</span></div>
 				 </div>
 			 </div>
 	 </div>

 	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
 		 <div class="category"></div>
 			 <div class="classbox">
 				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
 					 <div class="top">
 						 <div class="classpicture">
 						 </div>
 					 </div>
 					 <div class="bottom">
 						 <div class="tag">HOT</div>
 						 <div class="text">
 							 <h3 class="classtitle">日文檢定快樂過</h3>
 							 <div class="teacher_name">YOUKA</div>
 							 <div class="student_number">修課人數<span> 18</span></div>
 						 </div>
 						 <div class="progressbar">
 							 <div class="valuebar"></div>
 						 </div>
 					 <div class="view_number">瀏覽量<span> 560</span></div>
 					 <div class="price">課程價格<span>NT$ 8,000</span></div>
 				 </div>
 			 </div>
 	 </div>

 	 <div class="col-md-4 col-xs-6 col-sm-4 column ui-droppable">
 		 <div class="category"></div>
 			 <div class="classbox">
 				 <div class="teacher"><img class="teacherpic" src="https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg" alt="" width="200px"/></div>
 					 <div class="top">
 						 <div class="classpicture">
 						 </div>
 					 </div>
 					 <div class="bottom">
 						 <div class="tag">HOT</div>
 						 <div class="text">
 							 <h3 class="classtitle">日文檢定快樂過</h3>
 							 <div class="teacher_name">YOUKA</div>
 							 <div class="student_number">修課人數<span> 18</span></div>
 						 </div>
 						 <div class="progressbar">
 							 <div class="valuebar"></div>
 						 </div>
 					 <div class="view_number">瀏覽量<span> 560</span></div>
 					 <div class="price">課程價格<span>NT$ 8,000</span></div>
 				 </div>
 			 </div>
 	 </div>

 	</div>
  </div>
 </div>


@include('includes.footer')

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
