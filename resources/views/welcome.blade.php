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
<link rel="stylesheet" type="text/css" href="app/css/font-style.css" />
<link href="app/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-fix.css" />
<![endif]-->
<title>SeeEDU Live School</title>
<style type="text/css" id="pix_page_style"></style>




<style>

input[type=text] {
    width: 40px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 7px;
    font-size: 12px;
    opacity: 0.6;
    background-color: white;
    background-image: url('app/images/illustrations/search-solid.svg');
    background-size: 15px 15px;
    background-position: 3px 3px;
    background-repeat: no-repeat;
    padding: 4px 4px 4px 4px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  }

    input[type=text]:focus {
      width: 100%;
      background-position: 100%;
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
      <a href="{{ route('courses') }}" class="btn btn-lg pix-line pix-white-line wide">
       <span class="pix_edit_text"><b>開啟學習之旅</b></span>
      </a>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable" style="display: block;">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="far fa-comments" style="color: rgb(239, 143, 52); font-size: 100px;"></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text"><b>即時互動</b></span>
      </h6>
     </div>
    </div><div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="far fa-play-circle" style="color: rgb(239, 143, 52); font-size: 100px;"></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text"><strong>無限次觀看</strong></span>
      </h6>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="far fa-laugh-beam" style="color: rgb(239, 143, 52); font-size: 100px;"></i>
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
       <span class="pix_edit_text">即將額滿</span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="pix_section pix-padding-v-10" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">

    <div class="col-md-4 col-xs-12 col-sm-6 column ui-droppable">
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

    <div class="col-md-4 col-xs-12 col-sm-6 column ui-droppable">
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

    <div class="col-md-4 col-xs-12 col-sm-6 column ui-droppable">
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
 </div>
 <div class="pix_section pix-padding-v-30" id="section_features_2" style="display: block; background-color: rgb(252, 252, 252); background-repeat: repeat-x; padding-top: 0px; padding-bottom: 30px;">
  <div class="container">
   <div class="row">

     <div class="col-sm-1 column ui-droppable col-md-1"></div>

    <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/註冊會員.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>註冊會員</strong></span>
      </h5>
     </div>
    </div>

    <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/購買課程.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>購買課程</strong></span>
      </h5>
     </div>
    </div>


    <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/下載教材.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>購買/下載教材</strong></span>
      </h5>
     </div>
    </div>

    <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/下載zoom.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>下載zoom</strong></span>
      </h5>
     </div>
    </div>

    <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/快樂上課.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>快樂上課</strong></span>
      </h5>
     </div>
    </div>

     <div class="col-sm-1 column ui-droppable col-md-1"></div>

    </div>
   </div>

   <div class="container">
    <div class="row">
     <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
      <div class="pix-content text-center">
       <h6 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">

      </h6>
       <a href="{{ route('howtotakecourses') }}" class="btn green-bg btn-lg pix-white wide">
        <span class="pix_edit_text"><b>立即了解</b></span>
       </a>
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
       <i class="far fa-heart" style="color: rgb(239, 143, 52); font-size: 80px;"></i>
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
       <span class="pix_edit_text">我的工作是IC晶片設計開發，利用下班時間在SeeEDU上課，今年成功考到N3，希望未來在工作上可以活用日語能力。</span>
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
           <strong>科技業 蔡同學</strong></span>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content white-bg pix-radius-3 pix-padding-v-30 pix-margin-v-10 pix-padding-h-20">
      <p class="pix-black-gray-light big-text">
       <span class="pix_edit_text">學習英日語是為了到國外看看，我希望能到日本留學，進入設計領域一流的學校，完成夢想並向他們的職人精神看齊。</span>
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
           <strong>留學生 王同學</strong></span>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content white-bg pix-radius-3 pix-padding-v-30 pix-margin-v-10 pix-padding-h-20">
      <p class="pix-black-gray-light big-text">
       <span class="pix_edit_text">現實生活中我是一名數學老師，但在這裡我是資深學生。學習日語是為了到日本攀登不同的山，閱覽不同的風景。</span>
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
           <strong>登山愛好者 林同學</strong></span>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

@include('includes.footer')

@endsection

@section('welcome_scripts')

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
