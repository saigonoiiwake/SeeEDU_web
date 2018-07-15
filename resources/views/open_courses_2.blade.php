@extends('layouts.app')

@section('styles')

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


	<!-- include summernote css -->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">


@stop

@section('content')
<div class="pix_section pix-padding" id="section_titles_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span style="font-weight: 700;">&nbsp;立即開課</span></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text"><span style="font-size: 24px;">Step 2</span></span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div><div class="pix_section pix-padding" id="section_content_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 text-center col-sm-8 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content" style="background-repeat: repeat-x; padding: 0px 0px 0px 120px; margin: 0px;"><img src="http://res.cloudinary.com/sabina123/image/upload/c_scale,w_200/v1531221805/All_外框-23.png" alt="" class="img-responsive"></div>
    </div>
    <div class="col-xs-12 col-sm-4 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content pix-padding-top-120" style="background-repeat: repeat-x; padding: 0px; margin: 80px 0px 0px;">
      <h4 class="pix-black-gray-dark pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span><strong>填寫課程資訊</strong></span></span>
      </h4>
      <p class="pix-black-gray-light big-text pix-margin-bottom-20">
       <span class="pix_edit_text"><span>填寫＊號的部分即可快速生成課程大綱，而標籤的功能可以讓你更快被發掘，進而增加曝光的機會。</span></span>
      </p>

     </div>
    </div>
   </div>
  </div>
 </div>

<div class="col-md-8 col-md-offset-2">


	<div class="panel panel-default">
	 	<div class="panel-heading">
	     課程基本資訊
	 	</div>

	 	<div class="panel-body">
			<form class="form" action="#" method="post" enctype="multipart/form-data">
			<div class="form-row">
		     <div class="form-group col-md-6">
		      <label for="start_date_input">*課程開始日期</label>
		      <input type="date" class="form-control" id="start_date_input" placeholder="2018/04/06" name="start_date_input">
		    </div>

		     <div class="form-group col-md-6">
		      <label for="finish_date_input">*課程結束日期</label>
		      <input type="date" class="form-control" id="finish_date_input" placeholder="2018/09/06" name="finish_date_input">
		    </div>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
		      <label for="start_time">*上課時間</label>
		      <input type="time" class="form-control" id="start_time" placeholder="15:00" name="start_time">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="finish_time">*下課時間</label>
		      <input type="time" class="form-control" id="finish_time" placeholder="17:00" name="finish_time">
		    </div>
			</div>

			<div class="form-group">
						<div class="form-check form-check-inline col-md-3">
							<label>*開課星期</label>
						</div>
						<div class="form-check form-check-inline col-md-1">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
							<label class="form-check-label" for="inlineCheckbox1">一</label>
						</div>

						<div class="form-check form-check-inline col-md-1">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">二</label>
						</div>

						<div class="form-check form-check-inline col-md-1">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">三</label>
						</div>

						<div class="form-check form-check-inline col-md-1">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">四</label>
						</div>

						<div class="form-check form-check-inline col-md-1">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">五</label>
						</div>

						<div class="form-check form-check-inline col-md-1">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">六</label>
						</div>

						<div class="form-check form-check-inline col-md-3">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">日</label>
						</div>

			</div>



	  	</form>
		</div>

		<div class="panel-heading">
			 定價與學生人數
		</div>

		<div class="panel-body">

				<form class="form" action="#">

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="min_num">*課程人數下限</label>
							<input type="number" class="form-control" id="min_num" placeholder="5" name="min_num">
						</div>

						<div class="form-group col-md-6">
							<label for="max_num">*課程人數上限</label>
							<input type="number" class="form-control" id="max_num" placeholder="30" name="max_num">
						</div>

					</div>

						<div class="form-group">
							<label for="price">*課程售價(新台幣)</label>
							<input type="number" class="form-control" id="price" placeholder="5000">
						</div>

				</form>

		</div>

		<div class="panel-heading">
			 課程介紹
		</div>

		<div class="panel-body">
			<div class="form-group" >
					<label for="content">好的文案可以帶來更多的學生</label>
					<textarea name="content" id="content" rows="10" cols="5" class="form-control" ></textarea>
				</div>
		</div>

		<div class="panel-footer">
			<a href="{{ route('open_courses_1') }}"><button class="btn btn-info" type="submit">上一步</button></a>
			<a href="{{ route('open_courses_3') }}"><button class="btn btn-success col-md-8" type="submit">下一步</button></a>
			<a href="{{ route('welcome') }}"><button class="btn btn-default" type="submit">暫存離開</button></a>
		</div>

	</div>

</div>

@include('includes.footer')

@endsection

@section('scripts')

<!-- include summernote js -->
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> -->
<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer="defer"></script>

<script>
	$(document).ready(function() {
	$('#content').summernote();
	});
</script>

@endsection
