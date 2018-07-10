@extends('layouts.app')

@section('content')

<div class="header"></div>
<section class="title">
  <h1>我要開課</h1>
  <hr/>
</section>
<section class="intro">
  <div class="container"><img class="pen" src="https://res.cloudinary.com/sabina123/image/upload/v1530704916/pen-05.png" alt="" width="400px"/>
    <block class="text">
      <h3>教師基本資料</h3>
      <p>開課前請確認登入本人帳號，並請確實填寫真實姓名。</p>
    </block>
  </div>
</section>
<section class="form">
  <div class="step">
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
  </div>
  <div class="row outer">
    <div class="col-sm-8">
      <div class="row intertop">
        <div class="col-sm-6 topleftbox">
          <h5>真實姓名</h5>
          <input id="name_input" placeholder="魏如萱"/><br/>
          <h5>出生日期</h5>
          <input id="name_input" placeholder="1993/01/05"/>
        </div>
        <div class="col-sm-6 toprightbox">
          <h5>開課暱稱</h5>
          <input id="name" placeholder="娃娃"/><br/>
          <h5>聯絡電話</h5>
          <input id="phone" placeholder="0930962357"/>
        </div>
      </div>
      <div class="row interbuttom">
        <div class="col-sm-12 buttombox">
          <h5>學歷</h5>
          <input id="school" placeholder="交通大學外文系"/><br/>
          <h5>經歷</h5>
          <input id="experience" placeholder="東京奧運日文口譯"/>
        </div>
      </div>
    </div>
    <div class="col-sm-4 selfie">
      <input id="id_photo" type="file" multiple="multipled"/>
    </div>
  </div>
  <div class="row question">
    <button class="next">下一步</button>
    <button class="save">暫存離開</button>
  </div>
</section>

<script>

var inputAddphoto = '<div class="upload-photo">來一張獨一無二的你</div>',
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

<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


@stop

@section('open_courses_head')
<style>
@charset "UTF-8";
* {
font-family: 微軟正黑體;
position: static;
}

html, body {
margin: 0;
padding: 0;
}

.title h1 {
text-align: center;
height: 50px;
}
.title hr {
max-width: 50px;
border: solid 2px #C3C3C3;
margin: auto;
}

.container {
max-width: 1024px;
margin-left: auto;
margin-right: auto;
padding: 20px;
}
.container .pen {
float: left;
}
.container .text {
position: relative;
top: 50px;
}

.form {
border: solid 3px #C3C3C3;
max-width: 900px;
margin: auto;
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
}
.form .topleftbox, .form .buttombox {
padding-left: 40px;
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
}
.form .circle2 {
position: relative;
left: 40%;
}
.form .circle3 {
position: relative;
left: 82%;
}
.form .selfie {
height: 300px;
}
.form .upload-photo {
width: 100%;
height: 200px;
margin: 10px;
margin-left: -20px;
text-align: center;
line-height: 180px;
color: white;
font-weight: bold;
background-color: #C3C3C3;
background-size: cover;
}
.form .question .next {
background-color: #398DD5;
border-radius: 5px;
color: white;
width: 100px;
margin: 20px;
height: 40px;
margin-left: 35%;
}
.form .question .save {
background-color: #C3C3C3;
border-radius: 5px;
margin: 20px;
color: white;
width: 100px;
height: 40px;
}

@media screen and (max-width: 400px) {
.intro .pen {
  width: 50%;
}

.form .line, .form .step {
  display: none;
}
.form .toprightbox {
  padding-left: 40px;
}
.form .upload-photo {
  height: 60%;
  min-height: 100px;
  width: 50%;
  min-width: 100px;
  margin-left: auto;
  margin-right: auto;
}
.form .row.quesiton .next, .form .row.quesiton .save {
  display: none;
  margin-left: 0px;
  margin-right: 0px;
}
}

</style>
@stop


@section('open_course_body')




@stop
