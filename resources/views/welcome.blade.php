@extends('layouts.app')

@section('welcome_style')

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="uploads/pix-favicon.ico">
<meta name="description" content="SeeEDU Live School 讓學習把我們連結在一起
語言是一把鑰匙，讓我們一同開啟世界的門
英文、日文，以及你想得到的各種外語，在這裡都能輕鬆快樂的和朋友們一同學習！
互動式直播課程、無限次觀看、同學間的討論、分享。
學習變成最快樂的一件事！">
<meta name="keywords" content="日語
英語
熱門課程
Hiroshi
無限次觀看
直播課程
學日文
學英文
互動式
線上課程
真人
">


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
<title>SeeEDU Live School</title>
<style type="text/css" id="pix_page_style"></style>




<style>

input[type=text] {
    width: 60px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 12px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 4px 4px 4px 4px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  }

    input[type=text]:focus {
      width: 100%;
    }
</style>

@stop

@section('content')

<div class="pix_section pix-padding-top-100 pix-showcase-1" id="section_intros_1" style="display: block; background-image: linear-gradient(rgba(54, 63, 72, 0.8), rgba(54, 63, 72, 0.8)), url(&quot;app/images/travel/intro-bg-3.jpg&quot;); background-size: cover; background-repeat: repeat-x; background-attachment: fixed; padding-top: 100px; padding-bottom: 0px;" data-bg-img="linear-gradient( rgba(54,63,72,0.8) ,rgba(54,63,72,0.8)),url(&quot;app/images/travel/intro-bg-3.jpg&quot;)">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content text-center pix-padding-top-40 pix-padding-bottom-30">
      <h1 class="pix-white text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><strong>語言是一把鑰匙</strong></span>
      </h1>
      <p class="pix-light-gray big-text-20 text-center pix-margin-bottom-30">
       <span class="pix_edit_text">和同學們一同開啟世界的大門吧！</span>
      </p>
      <a href="#" class="btn btn-lg pix-line pix-white-line wide">
       <span class="pix_edit_text"><b>開啟學習之旅</b></span>
      </a>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable" style="display: block;">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="seoicon-people" style="color: rgb(239, 143, 52); font-size: 100px;"></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text"><b>即時互動</b></span>
      </h6>
     </div>
    </div><div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="seoicon-people" style="color: rgb(239, 143, 52); font-size: 100px;"></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text"><strong>無限次觀看</strong></span>
      </h6>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="seoicon-people" style="color: rgb(239, 143, 52); font-size: 100px;"></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text"><strong>討論分享</strong></span>
      </h6>
     </div>
    </div>
   </div>
  </div>
 </div>
<div class="pix_section pix-padding" id="section_titles_1" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><strong>熱門課程</strong></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text">額滿&nbsp; &nbsp;即將額滿&nbsp; &nbsp;有空位</span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>
<div class="pix_section pix-padding-v-40" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content pix-margin-v-20 gray-bg text-center">
      <div class="pix-cover-shape-180 no-radius">
       <img src="app/images/corporate/bg.jpg" alt="" class="img-responsive">
      </div>
      <div class="pix-padding-h-10 pix-padding-v-20">
       <h5 class="pix-black-gray-dark">
        <span class="pix_edit_text"><strong>日語實戰班</strong></span>
       </h5>
       <p class="pix-black-gray-light big-text pix-margin-bottom-20">
        <span class="pix_edit_text">
         Lorem ipsum dolor sit amet consec adipisicing elite sed do nano.
        </span>
       </p>
       <a href="#" class="btn btn-md orange-bg pix-white wide pix-margin-bottom-20 btn-flat">
        <span class="pix_edit_text"><span style="font-weight: 700;">NT$ 8,500</span></span>
       </a>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content pix-margin-v-20 gray-bg text-center">
      <div class="pix-cover-shape-180 no-radius">
       <img src="app/images/business/video-section-bg.jpg" alt="" class="img-responsive">
      </div>
      <div class="pix-padding-h-10 pix-padding-v-20">
       <h5 class="pix-black-gray-dark">
        <span class="pix_edit_text"><strong>中階日語會話班</strong></span>
       </h5>
       <p class="pix-black-gray-light big-text pix-margin-bottom-20">
        <span class="pix_edit_text">
         Lorem ipsum dolor sit amet consec adipisicing elite sed do nano.
        </span>
       </p>
       <a href="#" class="btn btn-md orange-bg pix-white wide pix-margin-bottom-20 btn-flat">
        <span class="pix_edit_text">
         <strong>NT$ 9,000</strong></span>
       </a>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content pix-margin-v-20 gray-bg text-center">
      <div class="pix-cover-shape-180 no-radius">
       <img src="app/images/eBook/intro-bg-ebook.jpg" alt="" class="img-responsive">
      </div>
      <div class="pix-padding-h-10 pix-padding-v-20">
       <h5 class="pix-black-gray-dark">
        <span class="pix_edit_text"><strong>多益700分課程</strong></span>
       </h5>
       <p class="pix-black-gray-light big-text pix-margin-bottom-20">
        <span class="pix_edit_text">
         Lorem ipsum dolor sit amet consec adipisicing elite sed do nano.
        </span>
       </p>
       <a href="#" class="btn btn-md orange-bg pix-white wide pix-margin-bottom-20 btn-flat">
        <span class="pix_edit_text">
         <strong>NT$ 7,800</strong></span>
       </a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div><div class="pix_section pix-padding-v-40" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content pix-margin-v-20 gray-bg text-center">
      <div class="pix-cover-shape-180 no-radius">
       <img src="app/images/corporate/bg.jpg" alt="" class="img-responsive">
      </div>
      <div class="pix-padding-h-10 pix-padding-v-20">
       <h5 class="pix-black-gray-dark">
        <span class="pix_edit_text"><strong>日語實戰班</strong></span>
       </h5>
       <p class="pix-black-gray-light big-text pix-margin-bottom-20">
        <span class="pix_edit_text">
         Lorem ipsum dolor sit amet consec adipisicing elite sed do nano.
        </span>
       </p>
       <a href="#" class="btn btn-md orange-bg pix-white wide pix-margin-bottom-20 btn-flat">
        <span class="pix_edit_text"><span style="font-weight: 700;">NT$ 8,500</span></span>
       </a>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content pix-margin-v-20 gray-bg text-center">
      <div class="pix-cover-shape-180 no-radius">
       <img src="app/images/business/video-section-bg.jpg" alt="" class="img-responsive">
      </div>
      <div class="pix-padding-h-10 pix-padding-v-20">
       <h5 class="pix-black-gray-dark">
        <span class="pix_edit_text"><strong>中階日語會話班</strong></span>
       </h5>
       <p class="pix-black-gray-light big-text pix-margin-bottom-20">
        <span class="pix_edit_text">
         Lorem ipsum dolor sit amet consec adipisicing elite sed do nano.
        </span>
       </p>
       <a href="#" class="btn btn-md orange-bg pix-white wide pix-margin-bottom-20 btn-flat">
        <span class="pix_edit_text">
         <strong>NT$ 9,000</strong></span>
       </a>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content pix-margin-v-20 gray-bg text-center">
      <div class="pix-cover-shape-180 no-radius">
       <img src="app/images/eBook/intro-bg-ebook.jpg" alt="" class="img-responsive">
      </div>
      <div class="pix-padding-h-10 pix-padding-v-20">
       <h5 class="pix-black-gray-dark">
        <span class="pix_edit_text"><strong>多益700分課程</strong></span>
       </h5>
       <p class="pix-black-gray-light big-text pix-margin-bottom-20">
        <span class="pix_edit_text">
         Lorem ipsum dolor sit amet consec adipisicing elite sed do nano.
        </span>
       </p>
       <a href="#" class="btn btn-md orange-bg pix-white wide pix-margin-bottom-20 btn-flat">
        <span class="pix_edit_text">
         <strong>NT$ 7,800</strong></span>
       </a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
<div class="pix_section pix-padding" id="section_titles_2" style="display: block;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><p><strong><span style="font-size: 16px;">更多課程&gt;</span></strong><span style="font-size: 16px;">﻿</span></p></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text"><span style="font-size: 12px;">好玩有趣的課程們都在等著你！</span></span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>
<div class="pix_section pix-padding" id="section_titles_3" style="display: block; background-color: rgb(252, 252, 252); background-repeat: repeat-x; padding-top: 60px; padding-bottom: 60px;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><strong>上課方式</strong></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text">輕輕鬆鬆開始學習</span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div><div class="pix_section pix-padding-v-30" id="section_features_2" style="display: block; background-color: rgb(252, 252, 252); background-repeat: repeat-x; padding-top: 0px; padding-bottom: 30px;">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 col-sm-4 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
      <div class="pix-margin-bottom-20 pix-cirlce-4">
       <i class="pixicon-person" style="color: rgb(66, 157, 235); font-size: 70px;"></i>
      </div>
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>註冊/登入會員</strong></span>
      </h5>
      <p class="pix-black-gray-dark pix-red">
       <span class="pix_edit_text"><strong>STARTING FROM $20,99</strong></span>
      </p>
      <p class="pix-black-gray pix-margin-bottom-20">
       <span class="pix_edit_text">We provides you with user manage functionality that results in faster development process.</span>
      </p>
     </div>
    </div>
    <div class="col-xs-12 col-sm-4 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 10px; margin: 0px 0px 20px;">
      <div class="pix-margin-bottom-20 pix-cirlce-4">
       <i class="pixicon-cart" style="color: rgb(66, 157, 235); font-size: 70px;"></i>
      </div>
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><span style="font-weight: 700;">購買課程</span></span>
      </h5>
      <p class="pix-black-gray-dark pix-red">
       <span class="pix_edit_text"><strong>STARTING FROM $114,99</strong></span>
      </p>
      <p class="pix-black-gray pix-margin-bottom-20">
       <span class="pix_edit_text">We provides you with user manage functionality that results in faster development process.</span>
      </p>
     </div>
    </div><div class="col-xs-12 col-sm-4 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 10px; margin: 0px 0px 20px;">
      <div class="pix-margin-bottom-20 pix-cirlce-4">
       <i class="pixicon-laptop2" style="color: rgb(66, 157, 235); font-size: 70px;"></i>
      </div>
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><span style="font-weight: 700;">下載ZOOM</span></span>
      </h5>
      <p class="pix-black-gray-dark pix-red">
       <span class="pix_edit_text"><strong>STARTING FROM $114,99</strong></span>
      </p>
      <p class="pix-black-gray pix-margin-bottom-20">
       <span class="pix_edit_text">We provides you with user manage functionality that results in faster development process.</span>
      </p>
     </div>
    </div><div class="col-xs-12 col-sm-4 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 10px; margin: 0px 0px 20px;">
      <div class="pix-margin-bottom-20 pix-cirlce-4">
       <i class="pixicon-happy" style="color: rgb(66, 157, 235); font-size: 70px;"></i>
      </div>
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><span style="font-weight: 700;">開始上課</span></span>
      </h5>
      <p class="pix-black-gray-dark pix-red">
       <span class="pix_edit_text"><strong>STARTING FROM $114,99</strong></span>
      </p>
      <p class="pix-black-gray pix-margin-bottom-20">
       <span class="pix_edit_text">We provides you with user manage functionality that results in faster development process.</span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>
<div class="pix_section pix-padding gray-bg" id="section_testimonials_2" style="display: block; background-repeat: repeat-x; padding-top: 60px; padding-bottom: 60px; background-color: rgb(255, 255, 255);">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable" style="display: block;">
     <div class="pix-content text-center">
      <div class="pix-margin-bottom-10">
       <i class="seoicon-quotes" style="color: rgb(239, 143, 52); font-size: 80px;"></i>
      </div>
      <h2 class="pix-black-gray-dark pix-no-margin-top">
       <span class="pix_edit_text">學習，讓我們遇見更好的自己。</span>
      </h2>
      <p class="pix-black-gray-light big-text pix-md-width-text pix-margin-bottom-30">
       <span class="pix_edit_text">聽聽SeeEDU學員們怎麼說...</span>
      </p>
     </div>
    </div><div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content white-bg pix-radius-3 pix-padding-v-30 pix-margin-v-10 pix-padding-h-20">
      <p class="pix-black-gray-light big-text">
       <span class="pix_edit_text">This product works good and everyone can create nice looking landing pages without coding.</span>
      </p>
      <div class="media">
       <div class="media-left media-middle">
        <div class="pix-round-shape-60">
         <img src="app/images/real_estate/team_1.jpg" alt="">
        </div>
       </div>
       <div class="media-body media-middle">
        <div class="pix-padding-left-5">
         <h6 class="media-heading pix-black-gray-dark">
          <span class="pix_edit_text">
           <strong>蔡執中</strong></span>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content white-bg pix-radius-3 pix-padding-v-30 pix-margin-v-10 pix-padding-h-20">
      <p class="pix-black-gray-light big-text">
       <span class="pix_edit_text">This product works good and everyone can create nice looking landing pages without coding.</span>
      </p>
      <div class="media">
       <div class="media-left media-middle">
        <div class="pix-round-shape-60">
         <img src="app/images/real_estate/team_2.jpg" alt="">
        </div>
       </div>
       <div class="media-body media-middle">
        <div class="pix-padding-left-5">
         <h6 class="media-heading pix-black-gray-dark">
          <span class="pix_edit_text">
           <strong>王念庭</strong></span>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content white-bg pix-radius-3 pix-padding-v-30 pix-margin-v-10 pix-padding-h-20">
      <p class="pix-black-gray-light big-text">
       <span class="pix_edit_text">This product works good and everyone can create nice looking landing pages without coding.</span>
      </p>
      <div class="media">
       <div class="media-left media-middle">
        <div class="pix-round-shape-60">
         <img src="app/images/real_estate/team_3.jpg" alt="">
        </div>
       </div>
       <div class="media-body media-middle">
        <div class="pix-padding-left-5">
         <h6 class="media-heading pix-black-gray-dark">
          <span class="pix_edit_text">
           <strong>林育誠</strong></span>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

@endsection

@section('welcome_scripts')
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
