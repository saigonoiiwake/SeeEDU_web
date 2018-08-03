@extends('layouts.app')


@section('styles')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.fancybox.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/pix_style.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/main.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('app/css/font-style.min.css') }}" />
	<link href="{{ asset('app/css/animations.min.css') }}" rel="stylesheet" type="text/css" media="all" />


	<style>

	.box {
	  border: 3px solid #398DD5;
	  border-radius: 80px;
	  height: auto;
	  width: auto;

	}
	.notice {
  font-size: 12px;

	}
	.dollor {
  color: #E24831;
  font-size: 30px;
  margin: 0 auto;
}
.originalprice {
  text-decoration:line-through;

}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

	</style>
@endsection




@section('content')


<div class="pix_section pix-padding-v-85 gray-bg" id="section_videos_2" style="display: block;">
  <div class="container">
		<div class="row col-xs-12 center-block text-center">
			<h5 class="pix-black-gray-dark secondary-font">
			 <span class="pix_edit_text"><strong>{{ $course->title }}</strong></span>
			</h5>
		</div>

   	<div class="row">


    <div class="col-md-8 col-xs-12 col-sm-8 column ui-droppable">
     <div class="pix-content">
      <div class="embed-responsive embed-responsive-16by9 pix-margin-v-20">
       <iframe src="{{ $course->video }}" width="640" height="360"></iframe>
      </div>
     </div>
    </div>

		<div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable" style="display: block;">
     <div class="pix-content white-bg">
      <div class="pix-padding-h-10">


       <div class="info_detail">
				 <h6><span class="pix_edit_text"><span class="label pix-black-gray-light ">日期</span> {{ $course->from_date }} ~ {{  $course->to_date }}</span></h6>

			 </div>

			 <div class="info_detail">
				 <h6><span class="pix_edit_text"><span class="label pix-black-gray-light ">時間</span> 每週
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
					 {{ json_decode($course->data, true)['from_time'] }} ~ {{ json_decode($course->data, true)['to_time'] }}</span></span></h6>
			 </div>

			 <div class="info_detail">
				 <h6><span class="pix_edit_text"><span class="label pix-black-gray-light ">剩餘名額</span></span>{{ $course->max_num - $course->enroll_num }}</h6>
			 </div>

			 <div class="pix-margin-top-80">

				 <h6><span class="originalprice"><span class="originalprice">NT$ {{ number_format($course->price/0.6,0) }}</span></span></h6>

				 @if( !session()->has('coupon') )
         <h4><span class="price"><span class="dollor">NT$ {{ number_format(1.1*$course->price,0) }}</span></span></h4>
				 @else
				    <h4><span class="price"><span class="dollor">NT$ {{ number_format(1.1*$course->price - session()->get('coupon')['discount'],0) }}</span></span></h4>
				 @endif

			</div>

					@if( session()->has('coupon'))
						使用折價券({{ session()->get('coupon')['name'] }}) : {{ session()->get('coupon')['discount'] }} NTD
						<form action="{{ route('coupon.destroy') }}" method="post" style="display:inline">
							{{ csrf_field() }}
							{{ method_field('delete') }}
							<button class="btn btn-default" type="submit" name="button">移除</button>
						</form>
						<br>
					@endif

					@php
						$final_price = $course->price*100*1.1
					@endphp

					@if( session()->has('coupon') )
						@php
						$final_price =  (1.1*$course->price - session()->get('coupon')['discount'])*100
						@endphp
					@endif

					@auth
						<form action="{{ route('course.checkout', ['id' => $course->id] ) }}" method="post" id="pay" style="display:inline">
						 {{ csrf_field() }}
						 <script
							 src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							 data-key="pk_live_jxA8AjBLue9eOOh5leJIAQA6"
							 data-amount="{{ $final_price }}"
							 data-name="SeeEDU Live School"
							 data-description="{{ $course->title }}"
							 data-email="{{ \Auth::user()->email }}"
							 data-image="{{ asset('app/images/illustrations/checkout.png')}}"
							 data-locale="en"
							 data-currency="twd"
							 data-label="立即購買">
						 </script>
					 	</form>
					@else
					<a href="{{ route('login') }}" class="btn blue-bg  pix-white pix-margin-bottom-10 pix-margin-right-10 wide pix-margin-top-10 secondary-font">
					 <span class="pix_edit_text">
						<strong>立即購買</strong>
					 </span>
				 </a>
					@endauth

			 <button class="btn btn-bg pix-gray pix-margin-bottom-10 pix-margin-right-10 wide pix-margin-top-1 secondary-font" onclick="document.getElementById('id01').style.display='block'" >擁有折扣代碼？</button>



			 	<h6><span class="notice"><span class="notice">其他支付方式請洽詢客服人員</span></span></h6>
			</div>
   </div>

  </div>
 </div>





 <div class="container">
   <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
     <li class="active"><a href="#intro" data-toggle="tab">課程介紹</a></li>
     <!-- <li><a href="#Videos" data-toggle="tab">心得感想</a></li> -->
     <li><a href="#Events" data-toggle="tab">討論區</a></li>
   </ul>
   <div class="tab-content">
     <div role="tabpanel" class="tab-pane fade in active" id="intro">


			 <div class="pix_section pix-padding-v-40" id="section_testimonials_1" style="display: block;">
			   <div class="container">
					 <h1 class="header">開課老師</h1>
			    <div class="row">

			     <div class="col-md-1 col-xs-12 col-sm-1 column ui-droppable">
			     </div>

                 @foreach($course->teacherOrTA()->get() as $teacher)
			     <div class="col-md-10 col-xs-12 col-sm-10 column ui-droppable">
			      <div class="pix-content pix-padding-bottom-30 pix-margin-v-30">
			       <div class="media">
			        <div class="media-right media-top text-center media-box-area">
			         <div class="pix-inner">
			          <div class="pix-round-shape-120 pix-margin-h-10">

			           <img src="{{ asset($course->teacherOrTA()->get()->first()->avatar) }}" alt="">

			          </div>
			         </div>
			        </div>
			        <div class="media-body media-top media-box-area">
			         <div class="pix-inner">
			          <p class="pix-black-gray-light big-text-20 pix-margin-bottom-20">
			           <span class="pix_edit_text">" {{ $teacher->profile or false ? $teacher->profile->about : '' }} "</span>
			          </p>
			          <h5 class="pix-black-gray pix-no-margin-top pix-no-margin-bottom">
			           <span class="pix_edit_text"><span style="font-weight: 700;">{{ $teacher->nick_name }}</span></span>
			          </h5>
			          <h6 class="pix-black-gray-light pix-no-margin-top">

			           <span class="pix_edit_text">
                           @if($teacher->profile or false)
                               @foreach($teacher->profile->getEducation() as $education)
                                  {{ $education }}
                               @endforeach
                           @endif
                 </span>
								 <br>
                <span class="pix_edit_text">
                          @if($teacher->profile or false)
                              @foreach($teacher->profile->getExperience() as $experience)
                                  {{ $experience }}
                              @endforeach
                          @endif
                </span>

			          </h6>
			         </div>
			        </div>
			       </div>
			      </div>
			     </div>
                    @endforeach
			    </div>
			   </div>
			  </div>

				<hr>

				<div class="container">
					<h1 class="header">課程介紹</h1>
					{!! $course->description->description !!}
				<hr>

				<div class="pix_section pix-padding-v-85" id="section_call_to_action_1" style="display: block;">
		     <div class="container">
		      <div class="row">
		       <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
		        <div class="pix-content text-center">
		         <h4 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
		          <span class="pix_edit_text"><strong>準備好要一起上課了嗎</strong></span>
		         </h4>
		         <h6 class="pix-black-gray-light text-center pix-margin-bottom-20">
		          <span class="pix_edit_text">加入SeeEDU一起學習吧！</span>
		         </h6>

						 @auth
							 <form action="{{ route('course.checkout', ['id' => $course->id] ) }}" method="post" id="pay" style="display:inline">
								{{ csrf_field() }}
								<script
									src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									data-key="pk_live_jxA8AjBLue9eOOh5leJIAQA6"
									data-amount="{{ $final_price }}"
									data-name="SeeEDU Live School"
									data-description="這裡放分類"
									data-image="{{ asset('app/images/illustrations/checkout.png')}}"
									data-locale="en"
									data-currency="twd"
									data-email="{{ \Auth::user()->email }}"
									data-label="立即購買">
								</script>
							 </form>
						 @else
						 <a href="{{ route('login') }}" class="btn blue-bg  pix-white pix-margin-bottom-10 pix-margin-right-10 wide pix-margin-top-10 secondary-font">
							<span class="pix_edit_text">
							 <strong>立即購買</strong>
							</span>
						</a>
						 @endauth

		        </div>
		       </div>
		      </div>
		     </div>
		    </div>



		 </div>
   </div>

	 <!-- <div role="tabpanel" class="tab-pane fade" id="Videos">
		 暫不開放
	 </div> -->
	 <div role="tabpanel" class="tab-pane fade" id="Events">
		 	@include('includes.disqus')
	 </div>
 </div>

@include('includes.footer')


<div id="id01" class="modal">

  <form class="modal-content animate" action="{{ route('coupon.getCode', ['id' => $course->id]) }}" method="post" >
		{{ csrf_field()	}}
		<div class="container">

				<label for="coupon"><b>折扣代碼</b></label>
				<input class="pix-black-gray-light" type="text" name="coupon_code" id="coupon_code" placeholder="請需入六碼代號">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<button type="submit" name="button" class="btn btn-bg pix-gray">確認</button>

    </div>

  </form>



</div>


@endsection

@section('scripts')

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b48c694fd25b00d"></script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

@endsection
