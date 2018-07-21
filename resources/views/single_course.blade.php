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
     <div class="pix-content text-left pix_feature_std pix_light_gray_border white-bg">
      <div class="pix-padding-h-10">

				<p class="pix-black-gray-light big-text">
          <span class="pix_edit_text">
           <i class="fas fa-hashtag">詳細資訊</i>
          </span>
        </p>


       <div class="pix-margin-bottom-15">
				 <h4><span class="pix_edit_text"><span class="label label-default pix-black-gray-light gray-bg">開課日期</span> {{$course->from_date}} </span></h4>
			 </div>

			 <div class="pix-margin-bottom-15">
				 <h4><span class="pix_edit_text"><span class="label label-default pix-black-gray-light gray-bg">結束日期</span> {{$course->to_date}} </span></h4>
			 </div>

			 <div class="pix-margin-bottom-15">
				 <h4><span class="pix_edit_text"><span class="label label-default pix-black-gray-light gray-bg">剩餘名額</span></span>  {{ $course->max_num - $course->enroll_num }} 名</h4>
			 </div>

			 <div class="pix-margin-bottom-15">
					<h4><span class="pix_edit_text"><span class="label label-default pix-black-gray-light gray-bg">課程價格</span></span>  NT ${{ number_format($course->price)}}</h4>

				</div>




			 <form action="{{ route('course.checkout', ['id' => $course->id] ) }}" method="post" id="pay">
				{{ csrf_field() }}
				<script
					src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					data-key="pk_test_LIuXwWxBY3u1pu98tJfg894O"
					data-amount="{{ $course->price*100 }}"
					data-name="SeeEDU Live School"
					data-description="這裡放分類"
					data-image="{{ asset('app/images/illustrations/checkout.png') }}"
					data-locale="en"
					data-currency="twd">
				</script>
			 <script>
							// Hide default stripe button, be careful there if you
							// have more than 1 button of that class
							document.getElementsByClassName("stripe-button-el")[0].style.display = 'none';
				</script>
					<button type="submit" class="btn dark-yellow-bg btn-lg pix-white wide"><span class="pix_edit_text"><b>立即購買</b></span></button>
			</form>
      </div>
     </div>
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

				<hr>

				<div class="container">
					<h1 class="header">課程介紹</h1>
					{{!! $course->description()->get()->first()->description	!!}}
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
						 <form action="{{ route('course.checkout', ['id' => $course->id] ) }}" method="post" id="pay">
							{{ csrf_field() }}
							<script
								src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								data-key="pk_test_LIuXwWxBY3u1pu98tJfg894O"
								data-amount="{{ $course->price*100 }}"
								data-name="SeeEDU Live School"
								data-description="這裡放分類"
								data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
								data-locale="en"
								data-currency="twd">
							</script>
						 <script>
										// Hide default stripe button, be careful there if you
										// have more than 1 button of that class
										document.getElementsByClassName("stripe-button-el")[1].style.display = 'none';
							</script>
								<button type="submit" class="btn dark-yellow-bg btn-lg pix-white wide"><span class="pix_edit_text"><b>立即購買</b></span></button>
						</form>
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

@endsection

@section('scripts')

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b48c694fd25b00d"></script>

@endsection
