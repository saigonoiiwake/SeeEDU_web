@extends('layouts.app')

@section('course_open_style')

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

<style>
  .form {
  border: solid 3px #C3C3C3;
  width: 900px;
  margin: 50px auto;
  }
  .form .line {
  position: relative;
  height: 10px;
  background-color: #C3C3C3;
  }
  .form .circle {
  display: inline-block;
  }
  .form .circle1 {
  position: relative;
  width: 60px;
  height: 60px;
  background-color: #398DD5;
  border-radius: 100%;
  left: -3.5%;
  top: -40px;
  }
  .form .circle1 h2 {
  text-align: center;
  color: white;
  position: relative;
  top: -5px;
  }
  .form .circle2, .form .circle3 {
  width: 60px;
  height: 60px;
  background-color: #C3C3C3;
  border-radius: 100%;
  top: -40px;
  }
  .form .circle2 h2, .form .circle3 h2 {
  text-align: center;
  color: white;
  position: relative;
  top: -5px;
  }
  .form .circle2 {
  position: relative;
  left: 40%;
  }
  .form .circle3 {
  position: relative;
  left: 82%;
  }

  .bottom {
  margin: 80px;
  }
  .bottom h5 {
  font-size: 16px;
  color: #434343;
  }
  .bottom input {
  position: relative;
  left: 20px;
  width: 150px;
  height: 20px;
  }
  .bottom .upload-photo {
  float: right;
  position: relative;
  top: -350px;
  width: 300px;
  height: 300px;
  margin: 10px;
  margin-left: -20px;
  text-align: center;
  line-height: 180px;
  font-weight: bold;
  color: white;
  background-color: #C3C3C3;
  background-size: cover;
  }
  .bottom .question {
  position: relative;
  margin-top: 60px;
  left: 120px;
  text-align: center;
  }
  .bottom .question .next {
  background-color: #398DD5;
  border-radius: 5px;
  color: white;
  width: 120px;
  margin: 20px;
  height: 40px;
  }
  .bottom .question .save {
  background-color: #C3C3C3;
  border-radius: 5px;
  margin: 20px;
  color: white;
  width: 120px;
  height: 40px;
  }
</style>
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


<section class="form">
  <div class="stepbar">
    <div class="line"></div>
    <div class="circle circle1">
      <h2>1</h2>
    </div>
    <div class="circle circle2">
      <h2>2</h2>
    </div>
    <div class="circle circle3">
      <h2>3</h2>
    </div>
    <!--STEP BAR結束-->
  </div>
  <div class="bottom">
    <h5>真實姓名
      <input id="name_input" placeholder="黃志明"/>
    </h5>
    <h5>出生日期
      <input id="name_input" placeholder="1993/01/05"/>
    </h5>
    <h5>開課暱稱
      <input id="name" placeholder="阿明"/>
    </h5>
    <h5>聯絡電話
      <input id="phone" placeholder="0930962357"/>
    </h5>
    <h5>學歷
      <input id="school" placeholder="交通大學外文系"/>
    </h5>
    <h5>經歷
      <input id="experience" placeholder="東京奧運日文口譯"/>
    </h5>
    <h5>大頭照（300X300px）
      <input id="id_photo" type="file" multiple="multipled"/>
    </h5>
    <div class="question">
      <button class="next"><a href="{{ route('open_courses_2') }}">下一步</a></button>
      <button class="save">暫存離開</button>
    </div>
  </div>
</section>

@stop

@section('course_open_scripts')
<script>
var inputAddphoto = '<div class="upload-photo"></div>',
    inputphoto = $('#id_photo');

inputphoto.before(inputAddphoto);

$('.upload-photo').on('click', function() {
    $(this).siblings('#id_photo').trigger('click');
});

inputphoto.on('change', function(){
    var input = $(this),
        reader = new FileReader();

    reader.onload = function (e) {
        input.siblings('.upload-photo').css('background-image', 'url(' + e.target.result + ')');
    };

    reader.readAsDataURL(this.files[0]);
});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


@stop
