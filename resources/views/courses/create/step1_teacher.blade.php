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

@stop

@section('content')


<div class="pix_section pix-padding" id="section_titles_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
     <div class="pix-content pix-padding-bottom-30">
      <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span style="font-weight: 700;">立即開課</span></span>
      </h2>
      <p class="pix-black-gray-light big-text text-center">
       <span class="pix_edit_text"><span style="font-size: 24px;"><span style="font-size: 24px;">Step</span><span style="font-size: 24px;"> 1</span></span></span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>
<div class="pix_section pix-padding" id="section_content_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
   <div class="row">
    <div class="col-xs-12 text-center col-sm-8 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content"><img src="https://res.cloudinary.com/sabina123/image/upload/v1530274963/基本資料-05.png" alt="" class="img-responsive"></div>
    </div>
    <div class="col-xs-12 col-sm-4 column ui-droppable col-md-6" style="display: block;">
     <div class="pix-content pix-padding-top-120" style="background-repeat: repeat-x; padding: 0px; margin: 80px 0px 0px;">
      <h4 class="pix-black-gray-dark pix-no-margin-top secondary-font">
       <span class="pix_edit_text"><span><strong>填寫教師資料</strong></span></span>
      </h4>
      <p class="pix-black-gray-light big-text pix-margin-bottom-20">
       <span class="pix_edit_text"><span>填寫之前請務必確認帳戶為本人帳戶，以及真實姓名須和身分證上姓名符合，審核作業將更加順利，謝謝您。</span></span>
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="col-md-8 col-md-offset-2">
 	<div class="panel panel-default">
 	 	<div class="panel-heading">
 	     老師基本資訊
 	 	</div>


		<form class="form" id="teacher-information" action="/courses/create/step/teacher" method="post" enctype="multipart/form-data">
			{{csrf_field()}}

			<div class="panel-body">

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="real_name">真實姓名</label><span class="required">*</span>
						<input type="text" class="form-control" id="name" placeholder="" name="name" required>
					</div>

					<div class="form-group col-md-6">
						<label for="nick_name">開課暱稱</label><span class="required">*</span>
						<input type="text" class="form-control" id="nick_name" placeholder="" name="nick_name" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="birthday">生日</label><span class="required">*</span>
						<input type="date" class="form-control" id="birthday" placeholder="2018/01/01" name="birthday" required>
					</div>
					<div class="form-group col-md-6">
						<label for="contact">聯絡電話</label><span class="required">*</span>
						<input type="text" class="form-control" id="contact" placeholder="" name="contact" required>
					</div>
				</div>

				<div class="form-group" id="education-block">
					<div id="education-input">
						<label for="school">學歷</label><span class="required">*</span>
						<input type="text" class="form-control" id="education" name="education[0]" required>
					</div>
					<div id="education-btn">
						<input type="button" id="education-add-btn" value="增加" class="btn btn-xs btn-success">
					</div>
				</div>
				<div class="form-group" id="experience-block">
					<div id="experience-input">
						<label for="school">經歷</label><span class="required">*</span>
						<input type="text" class="form-control" id="experience" name="experience[0]" required>
					</div>
					<div id="experience-btn">
						<input type="button" id="experience-add-btn" value="增加" class="btn btn-xs btn-success">
					</div>
				</div>


				<div class="form-group" >
					<label for="content">簡介(約50字)</label>
					<textarea name="content" id="content" rows="5" cols="5" class="form-control" ></textarea>
				</div>
			</div>

			<div class="panel-footer">
				<button class="btn btn-default" type="submit">暫存離開</button>
				<button class="btn btn-success col-md-8" type="submit">下一步</button>
			</div>
		</form>

 	</div>

 </div>

@include('includes.footer')

@endsection



@section('scripts')
<script src="{{ asset('http://code.jquery.com/jquery-1.9.1.js') }}"></script>
<script>
 //set the default value
 var educationId = 1;

 //add input block in education-input
 $("#education-add-btn").click(function () {
	 $("#education-input").append('<input type="text" class="form-control" id="education-'+ educationId+'" name="education['+ educationId +']" /> ');
     educationId++;
     if(educationId === 2) {
         $("#education-btn").append(
         	'<input class="btn btn-xs btn-danger" type="button" id="education-del-btn" value="刪除" onclick="delEducation()">'
		 );
	 }
 });

 function delEducation() {
     educationId--;
     $("#education-" + educationId).remove();
     if( educationId === 1 ) {
         $("#education-del-btn").remove();
	 }
 }


 //set the default value
 var experienceId = 1;

 //add input block in experience-input
 $("#experience-add-btn").click(function () {
     $("#experience-input").append('<input type="text" class="form-control" id="experience-'+ experienceId+'" name="experience['+ experienceId +']" /> ');
     experienceId++;
     if(experienceId === 2) {
         $("#experience-btn").append(
             '<input class="btn btn-xs btn-danger" type="button" id="experience-del-btn" value="刪除" onclick="delExperience()">'
         );
     }
 });

 //remove div
 function delExperience() {
     experienceId--;
     $("#experience-" + experienceId).remove();
     if( experienceId === 1 ) {
         $("#experience-del-btn").remove();
     }
 }

</script>

@endsection
