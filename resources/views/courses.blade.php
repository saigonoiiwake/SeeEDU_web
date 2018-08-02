@extends('layouts.app')

@section('styles')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="不斷學習，是一種生活態度！
SeeEDU Live School 讓學習把我們連結在一起，透過互動式直播課程，學習可以無所不在，錯過直播也不用擔心，每堂課都有錄影，讓你無限次觀看、複習，更棒的是！能夠和志同道合的同學們一起分享、討論，學習變成一件最有趣的事！ ">
	<meta name="keywords" content="日檢 課程 多益 日語 會話班 Hiroshi老師 日本留學 美國留學 托福 toefl 雅思">

<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.fancybox.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/pix_style.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/main.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-style.min.css') }}" />
	<link href="{{ asset('app/css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />

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
      position: relative;
    }
    .classbox .top .classpicture {
      width: 100%;
      height: 100%;
      position: absolute;
    }

    .teacherpic {
      position: absolute;
      width: 60px;
      height: 60px;
      top: 190px;
      background-size: cover;
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
       <span class="pix_edit_text">
				 @foreach($categories as $category)

            <a href="{{ route('category.single', ['id' => $category->id])}}">{{ $category->name }}</a>
            &nbsp;
          @endforeach</span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="pix_section pix-padding-v-10" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
 	<div class="row">


@foreach($courses as $course)
	@if( $course->status === 'open')
 	 <div class="col-md-4 col-xs-12 col-sm-6 column ui-droppable">
 		 <div class="category"></div>

 			 			<div class="classbox">
 				 		<div class="teacher"><img class="teacherpic" src="{{ $course->teacherOrTA()->get()->first()->avatar }}" alt="" width="200px"/></div>
 					 <div class="top">

						 <div class="card-container">
		 		   		<div class="card">
		 						<div class="side">
									<div class="classpicture">
										<a href="{{ route('course.single', ['id' => $course->id]) }}"><img src="{{ $course->featured }}" alt="" width="400px"></a>
									</div>
		 						</div>
		 						<div class="side back">
									<h6 class="coursetime"><strong>上課時段</strong><h6>

									<br>
									<div class="course1">
										<span>{{ $course->from_date }} ~ {{ $course->to_date }}</span>
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
 					 <div class="view_number">瀏覽數<span>{{ $course->browse_num }}</span></div>
 					 <div class="price">課程價格<span>NTD {{ 1.1*$course->price }}</span></div>
 				 </div>
 			 			</div>


 	 </div>
	 @endif
@endforeach

 	</div>
  </div>
 </div>


@include('includes.footer')

<!-- Javascript -->
<script>
$('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('%D days %H:%M:%S'));
  });
});
</script>

@stop
