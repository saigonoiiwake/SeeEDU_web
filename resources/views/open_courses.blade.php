@extends('layouts.app')

@section('course_open_style')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="uploads/pix-favicon.ico">
	<meta name="description" content="讓知識創造最高價值！
「師者，所以傳道、授業、解惑也。」
所謂老師，職責是傳播人生道理、講授專業知識、解答疑難問題。毫無疑問，一個好老師應受人尊重，因為知識極富價值。">
	<meta name="keywords" content="開課流程介紹
優秀老師
最高價值
最高收入
教學
日語
英語
韓語
西班牙語
美語
補習班
線上課程
立即開課">
開課流程介紹
SeeEDU提供優秀老師一個最佳的舞台	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="app/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/pix_style.min.css" />
	<link rel="stylesheet" type="text/css" href="app/css/main.min.css"/>
	<link rel="stylesheet" type="text/css" href="app/css/font-style.min.css" />
	<link href="app/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
@stop

@section('content')
<div class="pix_section pix-padding" id="section_titles_1" style="display: block;">
 <div class="container">
  <div class="row">
   <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
    <div class="pix-content pix-padding-bottom-30" style="background-repeat: repeat-x; padding: 0px; margin: 0px;">
     <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
      <span class="pix_edit_text"><span style="font-weight: 700;">開課流程介紹</span></span>
     </h2>
     <p class="pix-black-gray-light big-text text-center">
      <span class="pix_edit_text">SeeEDU提供給優秀老師最佳的舞台</span>
     </p>
    </div>
   </div>
  </div>
 </div>
</div><div class="pix_section pix-padding" id="section_content_1" style="display: block; background-repeat: repeat-x; padding-top: 0px; padding-bottom: 60px;">
 <div class="container">
  <div class="row">
   <div class="col-xs-12 text-center col-sm-8 column ui-droppable col-md-6" style="display: block;">
    <div class="pix-content"><img src="http://res.cloudinary.com/sabina123/image/upload/c_scale,w_450/v1531205782/開課指引-05.png" alt="" class="img-responsive"></div>
   </div>
   <div class="col-xs-12 col-sm-4 column ui-droppable col-md-6" style="display: block;">
    <div class="pix-content pix-padding-top-120" style="background-repeat: repeat-x; padding: 80px 0px 0px; margin: 0px;">
     <h4 class="pix-black-gray-dark pix-no-margin-top secondary-font">
      <span class="pix_edit_text"><span><strong>讓知識創造最高價值！</strong></span></span>
     </h4>
     <p class="pix-black-gray-light big-text pix-margin-bottom-20">
      <span class="pix_edit_text">「師者，所以傳道、授業、解惑也。」<br><span>所謂老師，職責是傳播人生道理、講授專業知識、解答疑難問題。毫無疑問，一個好老師應受人尊重，因為知識極富價值。</span></span>
     </p>
     <a href="{{ route('open_courses_1') }}" class="btn green-blue-bg pix-white normal btn-lg pix-line" style="background: transparent; border-color: rgb(66, 157, 235); color: rgb(66, 157, 235);">
      <span class="pix_edit_text">
       <strong>立即開課</strong></span>
     </a>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="pix_section pix-padding-top-60 gray-bg" id="section_features_1" style="display: block;">
 <div class="container">
  <div class="row">
   <div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
    <div class="pix-content">
     <div class="pix_section inner_section" id="section_features_1" style="display: block;">
      <div class="container">
       <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
         <div class="pix-content pix-padding-v-10 pix-margin-v-10">
          <div class="media ic">
           <div class="media-left pix-icon-area text-center">
            <div class="pix-cirlce-5 yellow-bg pix-margin-right-5">
             <i class="pixicon-person" style="color: rgb(255, 255, 255); font-size: 50px;"></i>
            </div>
           </div>
           <div class="media-body">
            <h4 class="pix-black-gray-dark secondary-font pix-no-margin-bottom">
             <span class="pix_edit_text"><strong>註冊/登入會員</strong></span>
            </h4>
            <p class="pix-black-gray-light pix-margin-bottom-30">
             <span class="pix_edit_text">1分鐘快速註冊/登入後。</span>
            </p>
           </div>
          </div>
         </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
         <div class="pix-content pix-padding-v-10 pix-margin-v-10">
          <div class="media ic">
           <div class="media-left pix-icon-area text-center">
            <div class="pix-cirlce-5 yellow-bg pix-margin-right-5">
             <i class="pixicon-info" style="color: rgb(255, 255, 255); font-size: 50px;"></i>
            </div>
           </div>
           <div class="media-body">
            <h4 class="pix-black-gray-dark secondary-font pix-no-margin-bottom">
             <span class="pix_edit_text"><strong>Step 1. 填寫教師資訊</strong></span>
            </h4>
            <p class="pix-black-gray-light pix-margin-bottom-30">
             <span class="pix_edit_text">填寫老師的學歷、經歷等，並上傳一張大頭照。</span>
            </p>
           </div>
          </div>
         </div>
        </div><div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable" style="display: block;">
         <div class="pix-content pix-padding-v-10 pix-margin-v-10">
          <div class="media ic">
           <div class="media-left pix-icon-area text-center">
            <div class="pix-cirlce-5 yellow-bg pix-margin-right-5">
             <i class="pixicon-video2" style="color: rgb(255, 255, 255); font-size: 50px;"></i>
            </div>
           </div>
           <div class="media-body">
            <h4 class="pix-black-gray-dark secondary-font pix-no-margin-bottom">
             <span class="pix_edit_text"><strong>Step 2. 填寫課程資訊</strong></span>
            </h4>
            <p class="pix-black-gray-light pix-margin-bottom-30">
             <span class="pix_edit_text">填寫課程大綱、直播課程的日期、課程費用、人數上下限等，以及上傳課程介紹影片。</span>
            </p>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div><div class="col-md-6 col-xs-12 col-sm-6 column ui-droppable">
    <div class="pix-content">
     <div class="pix_section inner_section" id="section_features_1" style="display: block;">
      <div class="container">
       <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
         <div class="pix-content pix-padding-v-10 pix-margin-v-10">
          <div class="media ic">
           <div class="media-left pix-icon-area text-center">
            <div class="pix-cirlce-5 yellow-bg pix-margin-right-5">
             <i class="pixicon-news-paper" style="color: rgb(255, 255, 255); font-size: 50px;"></i>
            </div>
           </div>
           <div class="media-body">
            <h4 class="pix-black-gray-dark secondary-font pix-no-margin-bottom">
             <span class="pix_edit_text"><strong>Step 3. 同意合約</strong></span>
            </h4>
            <p class="pix-black-gray-light pix-margin-bottom-30">
             <span class="pix_edit_text">了解合約內容，讓彼此更有保障。</span>
            </p>
           </div>
          </div>
         </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable">
         <div class="pix-content pix-padding-v-10 pix-margin-v-10">
          <div class="media ic">
           <div class="media-left pix-icon-area text-center">
            <div class="pix-cirlce-5 yellow-bg pix-margin-right-5">
             <i class="pixicon-timer2" style="color: rgb(255, 255, 255); font-size: 50px;"></i>
            </div>
           </div>
           <div class="media-body">
            <h4 class="pix-black-gray-dark secondary-font pix-no-margin-bottom">
             <span class="pix_edit_text"><strong>等待審查</strong></span>
            </h4>
            <p class="pix-black-gray-light pix-margin-bottom-30">
             <span class="pix_edit_text">在10個工作天內會通知您審查結果。</span>
            </p>
           </div>
          </div>
         </div>
        </div><div class="col-md-12 col-xs-12 col-sm-12 column ui-droppable" style="display: block;">
         <div class="pix-content pix-padding-v-10 pix-margin-v-10">
          <div class="media ic">
           <div class="media-left pix-icon-area text-center">
            <div class="pix-cirlce-5 yellow-bg pix-margin-right-5">
             <i class="pixicon-square-check" style="color: rgb(255, 255, 255); font-size: 50px;"></i>
            </div>
           </div>
           <div class="media-body">
            <h4 class="pix-black-gray-dark secondary-font pix-no-margin-bottom">
             <span class="pix_edit_text"><span style="font-weight: 700;">開始招生</span></span>
            </h4>
            <p class="pix-black-gray-light pix-margin-bottom-30">
             <span class="pix_edit_text">快告知身邊的朋友們這個好消息！<br><span>達成訂定的人數下限，即可成功開課。</span></span></p><div class="note-editor"><div class="note-dropzone">  <div class="note-dropzone-message"></div></div><div class="note-editing-area"><div class="note-handle"><div class="note-control-selection" style="display: none;"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><div class="note-editable" contenteditable="true" data-gramm_id="931264d5-c99d-e0a0-65a1-9648060e7919" data-gramm="true" spellcheck="false" data-gramm_editor="true"><br></div><grammarly-btn><div class="_1BN1N Kzi1t MoE_1 _2DJZN" style="z-index: 2; transform: translate(304px, -1px);"><div class="_1HjH7"><div title="Protected by Grammarly" class="_3qe6h">&nbsp;</div></div></div></grammarly-btn></div><div class="modal" aria-hidden="false" tabindex="-1"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>      <h4 class="modal-title">Insert Image</h4>    </div>    <div class="modal-body"><div class="form-group note-group-select-from-files"><label>Select from files</label><input class="note-image-input form-control" type="file" name="files" accept="image/*" multiple="multiple"></div><div class="form-group note-group-image-url" style="overflow:auto;"><label>Image URL</label><input class="note-image-url form-control col-md-12" type="text"></div></div>    <div class="modal-footer"><button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>      <h4 class="modal-title">Insert Video</h4>    </div>    <div class="modal-body"><div class="form-group row-fluid"><label>Video URL? <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input class="note-video-url form-control span12" type="text"></div></div>    <div class="modal-footer"><button href="#" class="btn btn-primary note-video-btn disabled" disabled="">Insert Video</button></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>      <h4 class="modal-title">Help</h4>    </div>    <div class="modal-body" style="max-height: 300px; overflow: scroll;"><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+Z</kbd></label><span>Undoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+Z</kbd></label><span>Redoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+B</kbd></label><span>Set a bold style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+I</kbd></label><span>Set a italic style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+U</kbd></label><span>Set a underline style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+S</kbd></label><span>Set a strikethrough style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+BACKSLASH</kbd></label><span>Clean a style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+L</kbd></label><span>Set left align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+E</kbd></label><span>Set center align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+R</kbd></label><span>Set right align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+J</kbd></label><span>Set full align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+NUM1</kbd></label><span>Change current block's format as H1</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+NUM2</kbd></label><span>Change current block's format as H2</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+NUM3</kbd></label><span>Change current block's format as H3</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+NUM4</kbd></label><span>Change current block's format as H4</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+NUM5</kbd></label><span>Change current block's format as H5</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+NUM6</kbd></label><span>Change current block's format as H6</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+ENTER</kbd></label><span>Insert horizontal rule</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CMD+K</kbd></label><span>Show Link Dialog</span></div>    <div class="modal-footer"><p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.2</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p></div>  </div></div></div></div>
            <p></p>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="pix_section pix-padding" id="section_content_2" style="display: block;">
 <div class="container">
  <div class="row">
   <div class="col-md-6 col-xs-12 text-center col-sm-6 column ui-droppable">
    <div class="pix-content"><img src="http://res.cloudinary.com/sabina123/image/upload/c_scale,w_350/v1531225020/All_外框-15.png" alt=""></div>
   </div><div class="col-xs-12 col-sm-6 column ui-droppable col-md-6" style="display: block;">
    <div class="pix-content pix-padding-top-60">
     <h2 class="pix-black-gray-dark pix-no-margin-top secondary-font">
      <span class="pix_edit_text"><strong>分潤政策</strong></span>
     </h2>
     <h5 class="pix-no-margin-top pix-orange">
      <span class="pix_edit_text">比實體補習班更加友善的分潤政策</span>
     </h5>
     <p class="pix-black-gray-light big-text pix-margin-bottom-20">
      <span class="pix_edit_text">        教師可自行訂定<span style="font-weight: bold;">課程價格</span>，SeeEDU平台上顯示之<span style="font-weight: bold;">課程平台售價</span>為課程價格的1.1倍，成功開課並達成最低學生數，教師的收入為<span style="font-weight: bold;">（課程價格）☓&nbsp; &nbsp;(購課人數）☓&nbsp; 80%</span></span>
     </p>
     <a href="{{ route('open_courses_1') }}" class="btn pix-orange-line wide normal btn-lg pix-line" style="background: transparent; border-color: rgb(66, 157, 235); color: rgb(66, 157, 235);">
      <span class="pix_edit_text">
       <strong>立即開課</strong></span>
     </a>
    </div>
   </div>
  </div>
 </div>
</div>

@include('includes.footer')

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
