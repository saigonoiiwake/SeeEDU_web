@extends('layouts.app')

@section('styles')


<!-- CSS dependencies -->
<link rel="stylesheet" type="text/css" href="{{ asset('app/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.fancybox.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app/css/pix_style.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app/css/main.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-style.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-style.css') }}" />
<link href="{{ asset('app/css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-fix.css" />
<![endif]-->

<style type="text/css" id="pix_page_style"></style>




<style>

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

        .classbox:hover .bookbtn {
          bottom: 10px;
        }

        .classbox .top {
          height: 220px;
          border-radius: 5px 5px 0px 0px;
          margin: -15px;
          margin-bottom: 0px;
          overflow: hidden;
    			object-fit: cover;
          position: relative;
        }
        .classbox .top .classpicture {
    			max-width:100%;
    			max-height:100%;
    			height: auto;
          position: absolute;
        }

        .teacherpic {
          position: absolute;
          width: 60px;
          height: 60px;
          top: 190px;
          background-size: cover;
          object-fit: cover;
          border: solid 2px white;
          border-radius: 100%;
          box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.12);
          z-index: 10;
          right: 5px;
          bottom: 170px;
        }

        .tag {
          width: 80px;
          height: 25px;
          position: absolute;
          color: white;
          top: 20px;
          left: -40px;
          padding-top: 3px;
          text-align: center;
          background-color: #429DEB;
          border-radius: 15px;
          box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.5);
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
          height: 100%;
          width: 30px;
          transition-duration: 1s;
        }

        .view_number, .price {
          display: inline-block;
        }

        .view_number {
          font-weight: 300;
          font-size: 15px;
          margin: 10px 8px 10px 0px;
          color: #C3C3C3;
        }

        .classtitle, .price {
          color: #434343;
        }

        .price {
          font-size: 15px;
          posiiton: relative;

        }

        .card-container {
          cursor: pointer;
          height: 220px;
          perspective: 600;
          position: relative;
          width: 260px;
        }
        .card {
          height: 220px;
          position: absolute;
          transform-style: preserve-3d;
          transition: all 1s ease-in-out;
          width: 260px;
        }

        .card:hover {
          transform: rotateY(180deg);

        }

        .card .side {
          backface-visibility: hidden;
          border-radius: 6px;
          height: 100%;
          position: absolute;
          overflow: hidden;
          width: 100%;
        }

        .course1 span {
          position: relative;
          top: 5px;
        }
        .weekday {
            color: #429DEB;
          }
        .comment {
          margin: 20px 0px 20px 30px;
        }
        .course1 {
          background-color: #FCFCFC;
          text-align: center;
          border: solid 1px #C3C3C3;
          border-radius: 5px;
          height: 60px;
          width: 200px;
          margin-right: auto;
          margin-left: auto;
          margin-top: 0;
          margin-bottom: 0;
          padding: 0px;

          }

        .card .back {

          font-size: 12px;
          background: #eaeaed;
          color: #434343;
          line-height: 3px;
          transform: rotateY(-180deg);

        }

        .coursetime {
          text-align: center;
          margin: 10px;

        }

        @media screen and (max-width: 300px) {
            span.big_title{
              font-size: 2px;
            }
        }

</style>

@stop

@section('content')

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1551974268251961"
  logged_in_greeting="哈囉！我是SeeEDU的Lisa，有問題都可以找我喔！"
  logged_out_greeting="哈囉！我是SeeEDU的Lisa，有問題都可以找我喔！">
</div>




<div class="pix_section pix-padding-top-100 pix-showcase-1" id="section_intros_1" style="display: block; background-image: url(&quot;/app/images/asia-1822521_1920.jpg&quot;); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: top center; background-repeat: no-repeat; background-attachment: scroll; padding-top: 80px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content text-center pix-padding-top-20 pix-padding-bottom-40">
      <h1 class="pix-white text-center pix-no-margin-top secondary-font">
       <span class="big_title" style=" text-shadow: 0 2px 5px rgba(0, 0, 0,.5);">精通日語不是夢</span>
      </h1>
      <p class="pix-white big-text-20 text-center pix-margin-bottom-30">
       <span class="sm_title" style="font-weight:300; text-shadow: 0 2px 5px rgba(0, 0, 0,.5);">JLPT日文檢定、日語各級會話等課程</span>
      </p>
      <a href="{{ route('courses') }}" class="btn btn-lg pix-line pix-white-line wide">
       <span class="sm_title" style="font-weight:300; text-shadow: 0 2px 5px rgba(0, 0, 0,.5);">探索課程</span>
      </a>
     </div>
    </div>

    <div class="col-md-4 col-xs-4 col-sm-4 column ui-droppable" style="display: block;">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="far fa-comments" style="color: #429DEB; font-size: 100px; text-shadow: 0 1px 0 rgba(255, 255, 255, 1); "></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text" style="font-weight:300; text-shadow: 0 2px 5px rgba(0, 0, 0,.5);">即時互動</span>
      </h6>
     </div>
   </div>
   <div class="col-md-4 col-xs-4 col-sm-4 column ui-droppable">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="far fa-play-circle" style="color: #429DEB; font-size: 100px; text-shadow: 0 1px 0 rgba(255, 255, 255, 1); "></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text" style="font-weight:300; text-shadow: 0 2px 5px rgba(0, 0, 0,.5);">無限次觀看</span>
      </h6>
     </div>
    </div>
    <div class="col-md-4 col-xs-4 col-sm-4 column ui-droppable">
     <div class="pix-content text-center pix-padding-v-50 pix-margin-v-10 pix-padding-h-10">
      <div class="pix-margin-bottom-30">
       <i class="fas fa-tasks" style="color: #429DEB; font-size: 100px; text-shadow: 0 1px 0 rgba(255, 255, 255, 1); "></i>
      </div>
      <h6 class="pix-white secondary-font">
       <span class="pix_edit_text" style="font-weight:300; text-shadow: 0 2px 5px rgba(0, 0, 0,.5);">系統學習</span>
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
       <span class="pix_edit_text"><strong>最新課程</strong></span>
      </h2>
      <!-- <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text">即將額滿</span>
      </p> -->
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="pix_section pix-padding-v-10" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">

     @foreach($courses as $course)
     <div class="col-md-4 col-xs-12 col-sm-6 column ui-droppable">
        <div class="category"></div>

               <div class="classbox">
               <div class="teacher"><img class="teacherpic" src="{{ $course->teacherOrTA()->get()->first()->avatar }}" alt="" width="200px"/></div>
              <div class="top">

              <div class="card-container">
               <div class="card">
                 <div class="side">
                   <div class="classpicture">
                     <a href="{{ route('course.single', ['id' => $course->id]) }}"><img src="{{ $course->featured }}" alt=""  width="260px"></a>
                   </div>
                 </div>
                 <div class="side back">
                   <h6 class="coursetime"><strong>上課時段</strong><h6>

                   <br>
                   <div class="course1">
                     <span>{{ $course->from_date }} ~ {{ $course->to_date }}</span>
                     <br>
                     <span class="weekday">每週
                       @foreach($course->getDayOfWeek() as $day_of_week)
                         @switch($day_of_week)
                           @case('monday')
                             一
                             @break
                           @case('tuesday')
                             二
                             @break
                           @case('wednesday')
                             三
                             @break
                           @case('thursday')
                             四
                             @break
                           @case('friday')
                             五
                             @break
                           @case('saturday')
                             六
                             @break
                           @case('sunday')
                             日
                             @break
                           @default
                             ?
                         @endswitch
                       @endforeach
                     </span>
                     <span>	{{ json_decode($course->data, true)['from_time'] }} ~ {{ json_decode($course->data, true)['to_time'] }}</span></span>
                   </div>

                     <br>

                   <!-- <div class="course1">
                     <span> 共 {{ count(json_decode($course->data, true)['chapter']) }} 堂課 </span>
                   </div> -->
                   <div class="" style="margin-left: 20px;">
                     <i class="fas fa-tag" style="color: #313131; font-size: 10px;"></i>
                       <span class="pix_edit_text">{{ $course->getCategoryName(App\CourseCategory::where('id',$course->category()->get()->first()->parent_id)->first()->parent_id) }}</span>
                     <i class="fas fa-tag" style="color: #313131; font-size: 10px;"></i>
                       <span class="pix_edit_text">{{ $course->getCategoryName($course->category()->get()->first()->parent_id) }}</span>
                     <i class="fas fa-tag" style="color: #313131; font-size: 10px;"></i>
                       <span class="pix_edit_text">{{ $course->category()->get()->first()->name }}</span>
                   </div>


                 </div>
               </div>
             </div>


              </div>


              <div class="bottom">
              @if( Carbon\Carbon::parse($course->from_date)->gt(Carbon\Carbon::now()) )
                <div class="tag">倒數 {{ Carbon\Carbon::parse($course->from_date)->diffInDays( Carbon\Carbon::now() ) }} 天</div>
              @else
              <div class="tag"><span>上課中</span></div>
              @endif
                <div class="text">
                  <h3 class="classtitle"><a href="{{ route('course.single', ['id' => $course->id]) }}">{{ $course->title }}</a></h3>
                  <div class="teacher_name">{{ $course->teacherOrTA()->get()->first()->nick_name }}</div>
                  <div class="student_number">修課人數<span> {{ $course->enroll_num }}</span></div>
                </div>
                <div class="progressbar">
                  <div class="valuebar"  style = "width : {{ 230*$course->enroll_num/$course->max_num }}px;" ></div>
                </div>
              <div class="view_number">瀏覽數<span>{{ 3*$course->browse_num }}</span></div>
              @php
                $d1 = new DateTime($course->from_date);
                $d2 = new DateTime($course->to_date);
              @endphp
              <div class="price">價格<span>NTD {{ $course->price/(1 + $d1->diff($d2)->m ) }} /月</span></div>

            </div>
               </div>


      </div>
     @endforeach

   </div>
   <!-- 選課去 -->

   <div class="container">
    <div class="row">
     <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
      <div class="pix-content text-center">
       <h6 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">

      </h6>
       <a href="{{ route('courses') }}" class="btn blue-bg btn-lg pix-white wide">
        <span class="pix_edit_text"><b>更多課程</b></span>
       </a>
      </div>
     </div>
    </div>
   </div>
   <br>

  </div>
 </div>

 <br> <br>

<div class="pix_section pix-padding" id="section_titles_3" style="display: block; background-color: #E6E6E6; background-repeat: repeat-x; padding-top: 60px; padding-bottom: 60px;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><strong>上課方式</strong></span>
      </h2>
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="pix_section pix-padding-v-30" id="section_features_2" style="display: block; background-color: #E6E6E6; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 30px;">
  <div class="container">
   <div class="row">

     <!-- <div class="col-sm-1 column ui-droppable col-md-1"></div> -->

    <div class="col-xs-3 col-sm-3 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/註冊會員.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>註冊會員</strong></span>
      </h5>
     </div>
    </div>

    <div class="col-xs-3 col-sm-3 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/購買課程.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>購買課程</strong></span>
      </h5>
     </div>
    </div>


    <!-- <div class="col-xs-6 col-sm-2 column ui-droppable col-md-2">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/下載教材.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>取得教材</strong></span>
      </h5>
     </div>
    </div> -->

    <div class="col-xs-3 col-sm-3 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/下載zoom.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>下載zoom</strong></span>
      </h5>
     </div>
    </div>

    <div class="col-xs-3 col-sm-3 column ui-droppable col-md-3">
     <div class="pix-content text-center pix-margin-v-20 pix-padding-h-10" style="background-repeat: repeat-x; padding: 0px 20px 0px 10px; margin: 0px 0px 20px;">
       <img src="app/images/illustrations/快樂上課.png" alt="" class="img-responsive">
      <h5 class="pix-black-gray-dark pix-no-margin-bottom">
       <span class="pix_edit_text"><strong>快樂上課</strong></span>
      </h5>
     </div>
    </div>

     <!-- <div class="col-sm-1 column ui-droppable col-md-1"></div> -->

    </div>
   </div>

   <div class="container">
    <div class="row">
     <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
      <div class="pix-content text-center">
       <h6 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">

      </h6>
       <a href="{{ route('howtotakecourses') }}" class="btn blue-bg btn-lg pix-white wide">
        <span class="pix_edit_text"><b>立即了解</b></span>
       </a>
      </div>
     </div>
    </div>
   </div>
   <br>

  </div>

  <div class="pix_section pix-padding gray-bg" id="section_titles_3" style="display: block; background-color: #ffffff; background-repeat: repeat-x; padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
     <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
       <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
        <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
         <span class="pix_edit_text"><strong>課程比較</strong></span>
        </h2>
       </div>
       <img src="https://res.cloudinary.com/sabina123/image/upload/v1535684528/seeedu_%E6%AF%94%E8%BC%83.png" alt="pic" style="max-width:100%;">
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
     </div>
    </div><div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content white-bg pix-radius-3 pix-padding-v-30 pix-margin-v-10 pix-padding-h-20">
      <p class="pix-black-gray-light big-text">
       <span class="pix_edit_text">我是任職於台積電的工程師，利用下班時間在SeeEDU上課，SeeEDU不僅具備時間、地點較為彈性等優點，課程品質及效果更是讓人驚豔。希望今年能成功考到N3，並活用日語能力。</span>
      </p>
      <div class="media">
       <div class="media-left media-middle">
        <div class="pix-round-shape-60">
         <img src="app/images/tsia2.jpg" alt="">
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
       <span class="pix_edit_text">我偏好小班教學，但在開始工作後時間常常無法配合，昂貴的學費往往都成為浪費。在SeeEDU能享受小班即時問答和無限觀看課程影片的好處，日文真的進步很多！</span>
      </p>
      <div class="media">
       <div class="media-left media-middle">
        <div class="pix-round-shape-60">
         <img src="app/images/wang2.jpg" alt="">
        </div>
       </div>
       <div class="media-body media-middle">
        <div class="pix-padding-left-5">
         <h6 class="media-heading pix-black-gray-dark">
          <span class="pix_edit_text">
           <strong>設計師 王同學</strong></span>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable">
     <div class="pix-content white-bg pix-radius-3 pix-padding-v-30 pix-margin-v-10 pix-padding-h-20">
      <p class="pix-black-gray-light big-text">
       <span class="pix_edit_text">現實生活中我是一名資深登山客，但在這裡我是日文初學者。我發現學習像登山，往上就會看到更遼闊的風景，上完課後我就能在日本繼續挑戰各個山岳，蝦咪攏不驚！</span>
      </p>
      <div class="media">
       <div class="media-left media-middle">
        <div class="pix-round-shape-60">
         <img src="app/images/chen.jpg" alt="">
        </div>
       </div>
       <div class="media-body media-middle">
        <div class="pix-padding-left-5">
         <h6 class="media-heading pix-black-gray-dark">
           <a href="https://medium.com/@service_28123/%E5%AD%B8%E7%BF%92%E5%83%8F%E7%99%BB%E5%B1%B1-%E5%BE%80%E4%B8%8A%E5%B0%B1%E6%9C%83%E7%9C%8B%E5%88%B0%E6%9B%B4%E9%81%BC%E9%97%8A%E7%9A%84%E9%A2%A8%E6%99%AF-2159bc14dc40" target="_blank"><span class="pix_edit_text">
            <strong>登山愛好者 陳同學</strong></span></a>
         </h6>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="text-center">
    <p class="pix-black-gray-light big-text pix-md-width-text pix-margin-bottom-30">
     <span class="pix_edit_text ">更多故事...</span>
    </p>
  </div>
</div>


@include('includes.footer')

@endsection


@section('scripts')


  <script>

  toastr.options = {
   "closeButton": true,
   "debug": false,
   "newestOnTop": false,
   "progressBar": false,
   "positionClass": "toast-bottom-left",
   "preventDuplicates": false,
   "onclick": null,
   "showDuration": "300",
   "hideDuration": "1000",
   "timeOut": "50000",
   "extendedTimeOut": "1000",
   "showEasing": "swing",
   "hideEasing": "linear",
   "showMethod": "fadeIn",
   "hideMethod": "fadeOut"
  }

  toastr.success("第一堂課不滿意，無條件全額退費！", "SeeEDU 保障您")

  </script>

@stop
