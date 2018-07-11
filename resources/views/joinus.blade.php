@extends('layouts.app')

@section('welcome_style')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="和我們一起懷抱熱情，朝理想邁進
這裡沒有老闆與員工，只有一群互相支援的夥伴！">
	<meta name="keywords" content="熱門職缺
前端工程師
高薪
後端工程師
UI設計師
PM
BD
Internship">
加入SeeEDU	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="app/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/pix_style.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/main.min.css"/>
	<link rel="stylesheet" type="text/css" href="app/css/font-style.css"/>
	<link href="app/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
@stop

@section('content')
<br>
<br>
  <div class="pix_section pix-padding" id="section_titles_1" style="display: block;">
    <div class="container">
     <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
       <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
        <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
         <span class="pix_edit_text"><strong>加入SeeEDU</strong></span>
        </h2>
        <p class="pix-black-gray-light big-text text-center">
         <span class="pix_edit_text">和我們一起懷抱熱情，朝理想邁進</span>
        </p>
       </div>
      </div>
     </div>
    </div>
   </div><div class="pix_section pix-padding" id="section_features_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 60px;">
    <div class="container">
     <div class="row">

      <div class="col-md-8 col-xs-12 text-center col-sm-8 column ui-droppable" style="display: block;">
       <div class="pix-content"><img src="https://res.cloudinary.com/sabina123/image/upload/v1531222459/All_外框-29.png" alt="" class="img-responsive"></div>
      </div><div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable" style="display: block;">
       <div class="pix-content pix-padding-top-120">
        <h4 class="pix-black-gray-dark pix-no-margin-top secondary-font">
         <span class="pix_edit_text"><b>我們的故事</b></span>
        </h4>
        <p class="pix-black-gray-light big-text pix-margin-bottom-20">
         <span class="pix_edit_text">一個最不一樣的線上教育平台</span>
        </p>
        <a href="{{ route('about') }}" class="btn green-blue-bg pix-white btn-md normal" style="background-color: rgb(66, 157, 235);">
         <span class="pix_edit_text"><span style="font-weight: 700;">了解更多</span></span>
        </a>
       </div>
      </div><div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable" style="display: block;">
       <div class="pix-content pix-padding-bottom-30">
        <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
         <span class="pix_edit_text"><span style="font-weight: 700;">你絕對不能錯過</span></span>
        </h2>
        <p class="pix-black-gray-light big-text text-center">
         <span class="pix_edit_text">這裡沒有老闆與員工，只有一起並肩作戰，互相cover的夥伴們</span>
        </p>
       </div>
      </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
       <div class="pix-content pix-margin-v-30">
        <div class="media">
         <div class="media-left media-middle">
          <div class="pix-margin-bottom-20 pix-cirlce-7">
           <i class="pixicon-window81" style="color: rgb(66, 157, 235); font-size: 60px;"></i>
          </div>
         </div>
         <div class="media-body media-middle">
          <div class="pix-padding-left-5">
           <h5 class="media-heading pix-black-gray-dark secondary-font">
            <span class="pix_edit_text">
             <strong>舒適的辦公空間</strong></span>
           </h5>
           <p class="pix-black-gray-light pix-margin-bottom-20">
            <span class="pix_edit_text">We provide you with a full user control that results in more faster revenue.</span>
           </p>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
       <div class="pix-content pix-margin-v-30">
        <div class="media">
         <div class="media-left media-middle">
          <div class="pix-margin-bottom-20 pix-cirlce-7">
           <i class="pixicon-hotairballoon" style="color: rgb(66, 157, 235); font-size: 60px;"></i>
          </div>
         </div>
         <div class="media-body media-middle">
          <div class="pix-padding-left-5">
           <h5 class="media-heading pix-black-gray-dark secondary-font">
            <span class="pix_edit_text"><span style="font-weight: 700;">一年15天特休</span></span>
           </h5>
           <p class="pix-black-gray-light pix-margin-bottom-20">
            <span class="pix_edit_text">We provide you with a full user control that results in more faster revenue.</span>
           </p>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
       <div class="pix-content pix-margin-v-30">
        <div class="media">
         <div class="media-left media-middle">
          <div class="pix-margin-bottom-20 pix-cirlce-7">
           <i class="pixicon-light" style="color: rgb(66, 157, 235); font-size: 60px;"></i>
          </div>
         </div>
         <div class="media-body media-middle">
          <div class="pix-padding-left-5">
           <h5 class="media-heading pix-black-gray-dark secondary-font">
            <span class="pix_edit_text"><span style="font-weight: 700;">發揮你的所長</span></span>
           </h5>
           <p class="pix-black-gray-light pix-margin-bottom-20">
            <span class="pix_edit_text">We provide you with a full user control that results in more faster revenue.</span>
           </p>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
       <div class="pix-content pix-margin-v-30">
        <div class="media">
         <div class="media-left media-middle">
          <div class="pix-margin-bottom-20 pix-cirlce-7">
           <i class="pixicon-heart5" style="color: rgb(66, 157, 235); font-size: 60px;"></i>
          </div>
         </div>
         <div class="media-body media-middle">
          <div class="pix-padding-left-5">
           <h5 class="media-heading pix-black-gray-dark secondary-font">
            <span class="pix_edit_text">
             <strong>比你更在乎你的職涯</strong></span>
           </h5>
           <p class="pix-black-gray-light pix-margin-bottom-20">
            <span class="pix_edit_text">We provide you with a full user control that results in more faster revenue.</span>
           </p>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>





  <div class="pix_section pix-padding-v-65 gray-bg" id="section_content_1" style="display: block;">
    <div class="container">
     <div class="row">

      <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
       <div class="pix-content  pix-padding-v-50">
        <div class="pix_section inner_section" id="section_content_1" style="display: block;">
         <div class="container">
          <div class="row">
           <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
            <div class="pix-content pix-padding-top-20">
             <h2 class="pix-black-gray-dark pix-no-margin-top secondary-font">
              <span class="pix_edit_text">
               <strong>熱門職缺</strong></span>
             </h2>
             <p class="pix-black-gray-light big-text pix-margin-bottom-20">
              <span class="pix_edit_text">This is just a simple text made for this unique and awesome template, you can replace it with any text.</span>
             </p>
            </div>
           </div>

           <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable" style="display: block;">
            <div class="pix-content pix-padding-v-10 text-left">
             <div class="media ic">
              <div class="media-left pix-icon-area text-center pix-padding-right-20 pix-padding-top-10">
               <img src="{{ asset('app/images/deal/dialog.png') }}" alt="">
              </div>
              <div class="media-body">
               <h5 class="pix-black-gray-dark secondary-font">
                <span class="pix_edit_text"><strong>後端工程師</strong></span>
               </h5>
               <p class="pix-black-gray-light pix-margin-bottom-30">
                <span class="pix_edit_text">Create your own company today.</span>
               </p>
              </div>
             </div>
            </div>
           </div><div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
            <div class="pix-content pix-padding-v-10 text-left">
             <div class="media ic">
              <div class="media-left pix-icon-area text-center pix-padding-right-20 pix-padding-top-10">
               <img src="{{ asset('app/images/deal/bag.png') }}" alt="">
              </div>
              <div class="media-body">
               <h5 class="pix-black-gray-dark secondary-font">
                <span class="pix_edit_text"><strong>BD</strong></span>
               </h5>
               <p class="pix-black-gray-light pix-margin-bottom-30">
                <span class="pix_edit_text">Start using pixfort page builder.</span>
               </p>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-md-6 col-xs-12 text-center pix-padding-top-40 col-sm-6 column ui-droppable">
       <div class="pix-content"><img src="{{ asset('app/images/business/video-section-bg.jpg') }}" alt="" class="img-responsive pix-inline-block"></div>
      </div>
     </div>
    </div>
   </div><div class="pix_section pix-padding-v-85" id="section_call_to_action_1" style="display: block;">
    <div class="container">
     <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
       <div class="pix-content text-center">
        <h4 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
         <span class="pix_edit_text"><strong>加入SeeEDU</strong></span>
        </h4>
        <h6 class="pix-black-gray-light text-center pix-margin-bottom-20">
         <span class="pix_edit_text">這裡有與你/妳一起實現夢想的夥伴！</span>
        </h6>
        <a href="#" class="btn green-bg btn-lg pix-white wide">
         <span class="pix_edit_text"><b>立即應徵</b></span>
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>



  <div class="pix_section pix_section_dragged" style="z-index: 2147483647; display: inline-block; box-shadow: rgba(0, 0, 0, 0) 0px 0px 9px 9px !important; position: relative; width: 220px; right: auto; height: 200px; bottom: auto; left: 0px; top: 0px;" id="section_3">
		<div style=" box-shadow: 0 0 5px 1px rgba(0,0,0,0.08),0 0px 10px 0 rgba(0,0,0,0.08) !important;display:inline-block;border-radius:3px;overflow:hidden;">
		</div>
	</div>

@stop

@section('welcome_scripts')
  <!-- Javascript -->
	<!-- Javascript -->
<script src="app/js/jquery-1.11.2.js"></script>
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
