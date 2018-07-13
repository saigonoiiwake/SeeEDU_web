@extends('layouts.app')

@section('welcome_style')

<style>

@charset "UTF-8";
* {
  font-family: 微軟正黑體;
}

h1 {
  margin-top: 40px;
  margin-bottom: 20px;
  font-size: 30px;
  color: #434343;
}

.course_box {
  border: solid 4px #C3C3C3;
  width: 100%;
  height: 70px;
  border-radius: 5px;
}
.course_box .fa-calendar {
  font-size: 30px;
  color: #398DD5;
  margin: 17px 30px 17px 20px;
  float: left;
}
.course_box .text {
  display: inline-block;
  position: relative;
  padding: 5px;
}
.course_box .text h6 {
  font-size: 8px;
  color: #C3C3C3;
  font-weight: 300;
  margin: 0;
}
.course_box .text h5 {
  font-size: 16px;
  color: #434343;
  margin: 4px 0 4px 0;
}
.course_box .left {
  float: right;
  width: 10px;
  margin-right: 30px;
  margin-top: 7px;
}



</style>

@endsection

@section('content')


<main class="py-4">
  <br><br><br>
        <div class="container">
          <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="list-group">

                  <li class="list-group-item">
                      <a href="{{ route('mypage') }}">我的頁面</a>
                  </li>

                  <li class="list-group-item">
                      <a href="{{ route('mycourse') }}">課程列表</a>
                  </li>

                  <li class="list-group-item">
                      <a href="#">訊息</a>
                  </li>


                </ul>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

<div class="course_list">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h1>五月2018</h1>
      <div class="course_box"><i class="fa fa-calendar"></i>
        <div class="text">
          <h6>5/29 15:00 </h6>
          <h5>日檢實戰班</h5>
          <h6>Hiroshi 老師</h6>
        </div>
        <div class="left"><i class="fa fa-envelope"></i><i class="fa fa-arrow-right"></i></div>
      </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>



            </div>

          </div>



          </div>
  </div>

</main>

@include('includes.footer')

@endsection
