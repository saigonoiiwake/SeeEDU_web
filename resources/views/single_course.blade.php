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
			 <span class="pix_edit_text"><strong>商用日語暑期衝刺班</strong></span>
			</h5>
		</div>
   	<div class="row">


    <div class="col-md-8 col-xs-12 col-sm-8 column ui-droppable">
     <div class="pix-content">
      <div class="embed-responsive embed-responsive-16by9 pix-margin-v-20">
       <iframe src="https://player.vimeo.com/video/203287009?color=f7941d&amp;title=0&amp;byline=0&amp;portrait=0" width="640" height="360"></iframe>
      </div>
     </div>
    </div><div class="col-md-4 col-xs-12 col-sm-4 column ui-droppable" style="display: block;">
     <div class="pix-content text-left pix_feature_std pix_light_gray_border white-bg">
      <div class="pix-padding-h-10">
       <div class="pix-padding-v-9">
				 <div class="row">

					 <i id="calendar" class="far fa-calendar-alt big-icon-55 pix-slight-white"></i>
					 <label for="calendar">日期時間</label>
				 </div>
       </div>

       <div class="pix-margin-bottom-15"><h6><span class="pix_edit_text"><span class="label label-default pix-black-gray-light gray-bg">商用</span></span></h6></div>
       <p class="pix-black-gray-light big-text">
         <span class="pix_edit_text">
          這門課適合想要去日本發展職涯，或是工作中會接觸到日本客戶的學生
         </span>
       </p>
       <a href="#" class="btn  orange-bg btn-round-lg pix-white pix-margin-bottom-10 pix-margin-right-10 wide pix-margin-top-10 secondary-font">
         <span class="pix_edit_text">
          <strong>購買</strong>
         </span>
       </a>
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

			 	<h1 class="header">公告欄</h1>
				<div class="container">
					<div class="row">
				 		<div class="col-4">
					 			<img class="bell" src="https://i.imgur.com/JrvTbrw.png" alt="" width="50px"/>
				 		</div>
				 		<div class="box col-8">
								<span>test</span>
					 	</div>
				 </div>
			 </div>


				<hr>


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
			           <img src="app/images/startup/client-1.jpg" alt="">
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
					<div class="sc-hSdWYo fUeDnj" style="user-select: text; word-break: break-all; color: rgba(0, 0, 0, 0.65); font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; font-size: 16px; background-color: rgb(243, 243, 241);"><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">從 0 到 1 - 為初學者而設計的日文課</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">比起一般補習班跟其他課程，有更多的人都是從自學（完全不懂）的情況下踏入日語學習之路。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">坊間有許多日文補習班，但品質參差不一，常常需要花時間在網路上尋找適合的對象。而補習班也會因每個人的程度不同，上課進度有落差。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">最後造成的結果是動詞變化等等需要到後期階段才能夠完全搞懂，或是補習之後仍然只會基本的名詞句以及敬語變化。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">另外，也有可能因為工作、課業的關係，補習班的時間常常無法配合。這門課就是專門為你設計的，希望在下班、下課之餘，也能夠利用零碎的時間學習新的語言。</p><blockquote style="padding: 2px 0px 2px 16px; margin-top: 24px; margin-bottom: 24px; font-size: 18px; border-left-color: rgb(250, 139, 0); color: rgba(0, 0, 0, 0.87); letter-spacing: 0.1em;">這門課並不會在課程中教太多的單字，會將重點著眼於如何建立日語的基礎知識。</blockquote><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">課程簡介</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><span style="font-weight: 700;">從 0 到 1</span></p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">我們會從最基本的五十音教學，一路從名詞句、形容詞句、動詞句，到各種句型的變化例如：動詞變化、形容詞變化、過去式、進行式、敬語以及常體的變化等等。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">等到大家對日語已有足夠的熟悉程度及基礎時，我們就會開始進入句型應用。句型應用的範圍很廣，而且有絕大部分的文法都建立在前面所介紹的內容（動詞變化、過去式、現在式）當中。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">自學日文時，如果剛開始沒有掌握正確的基本概念，往往好不容易跨過第一難關 50 音時，就開始學習文法。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">但是日文的文法規則變化多端，市面上的文法書參差不齊，照本宣科地寫上變化讓人摸不著頭緒，所以往往到了最重要的動詞變化就放棄了。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><span style="font-weight: 700;">同是自學者的痛</span></p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">這些都是自學的我曾經走過的慘痛經歷。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">我會把容易混淆的概念跟文法釐清，讓同時自學的各位減少走冤枉路的時間。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><img src="https://hahow.in/images/58f2061a4909c907004ac16c" style="width: 585px; margin: 24px 0px;"></p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">上完課程後，你能夠學到</h4><ul style="margin: 24px 0px; padding-left: 20px;"><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">N5 ~ N4 所需具備的文法基礎</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">能夠正確地做各種名詞、形容詞、形容動詞、動詞等變化</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">學到如何正確辨別句型、拆解動詞</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">能夠互相轉換常體、敬體，並且使用禮貌性更高的敬語形（謙讓語、尊敬語）</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">能夠看懂且分析簡單的日文文章</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">能夠快速辨別句型、拆解動詞</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">可以用簡單的句子，到日本自助旅行</p></li></ul><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">（2017/7/13）這堂課適合我嗎？</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">這門課主要是希望大家對日語有基本的概念，因此課程主軸會著重於文法以及相關的句型應用，以及提供相關的自學資源。<span style="font-weight: 700;">比較少著墨於單字以及日常會話應用</span>，所以如果只想學習一些日常會話的話，這堂課可能不太適合你唷！</p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">內容簡介</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">我們主要會將單元分為三大部分：</p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">第一部分（單元 1 ~ 單元 23）</h4><ul style="margin: 24px 0px; padding-left: 20px;"><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">五十音</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">名詞句</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">形容詞句</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">形容動詞句</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">動詞變化</p></li></ul><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">這一部分是學習日語的必備基礎，會針對五十音、名詞、動詞、形容動詞、形容詞的變化一一說明，如果完全沒有基礎的同學，請務必將這部分的單元釐清後再繼續下一階段的學習。</p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">第二部分（單元 24 ~ 單元 40）</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">第二部分會針對變化，開始介紹日語當中各種豐富的句型，像是假設句、命令句、請求許可、表示能力、完成式、比較形等等，都是在日語中常見的句型應用。</p><ul style="margin: 24px 0px; padding-left: 20px;"><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">日語中的助詞、量詞應用</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">介紹各種日語中，常見的句型及文法&nbsp;</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">動詞進階變化（如：使役、被動、表示能力、完成式、假定等等）</p></li></ul><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">第三部分（單元 41 ~ 單元 46）</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">補充單元當中，我會介紹 Anki 這個好用的背單字 App，並且提供自己自學時常使用的網站以及新聞，最後再用課程中教學的內容進行 N5 模擬試題實戰！</p><ul style="margin: 24px 0px; padding-left: 20px;"><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;">Anki 的基本使用教學</li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;">使用 Anki 製作單字卡</li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;">學習網站推薦</li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;">N5 模擬試題實戰</li></ul><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">背單字神器 — <a href="https://apps.ankiweb.net/" style="color: rgb(250, 139, 0); cursor: pointer; outline: none; word-break: break-word; word-wrap: normal; border-bottom: 1px solid rgb(250, 139, 0);">Anki</a></h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><img src="https://hahow.in/images/58f2fe294909c907004ac4de" style="width: 585px; margin: 24px 0px;"></p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">在課程的尾聲中，我會介紹這款非常實用的背單字 App — <span style="font-weight: 700;">Anki</span>。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">它結合了演算法來判斷你對單字的熟悉程度，按照頻率出現，這樣一來你早就已經熟悉的單字，就會減少出現的頻率，並增加不熟單字的出現頻率。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">這款 App 不僅能夠用來背單字，還能夠使用在多種需要記憶的場合當中；同時，Anki 保留了非常大的彈性，讓你能夠自由增加單字卡的欄位、樣式、排版等等。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><img src="https://hahow.in/images/58f201c64909c907004ac164" style="width: 585px; margin: 24px 0px;"></p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">搭配簡單的語法，我會介紹如何利用 Anki 的強大功能，製作專屬於自己的單字卡。</p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">學日文的優勢與學習曲線</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">台灣人學習日文有幾個優勢：</p><ul style="margin: 24px 0px; padding-left: 20px;"><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">省下了學習漢字的時間</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">許多漢字跟中文的發音類似，省下了背單字的時間</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">五十音皆從中國的楷書、草書演變而來。</p></li></ul><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">日文的學習曲線則在於：</p><ul style="margin: 24px 0px; padding-left: 20px;"><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">很多初學者在初期學習無法流暢轉換敬語及常體</p></li><li style="word-break: break-word; word-wrap: normal; white-space: pre-wrap; list-style: disc;"><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; padding: 0px;">動詞變化有一套稍嫌繁雜的規則，如果沒有有系統地學習，常常會是初學者放棄學習日語的主因。</p></li></ul><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">所以本課程會在基本的五十音、形容詞句、名詞句教學完畢，已經對日文有大概了解時，馬上就會進入動詞變化，讓各位熟悉日文動詞的運用。</p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">沒有天份怎麼辦？</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">學習日文不需要天份，也不用過於常人的努力，是長期而且持續的累積。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">所以在學習初期階段，如果對五十音實在是背得非常痛苦也沒關係，不需要強迫自己背完五十音後才能開始下一步，我們可以先開始學習基本的文法與句型，看到不懂的字再查詢即可囉！</p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">關於我</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">我平時的工作是一名前端工程師，但是自己非常喜歡日本文化，所以從高中畢業時就靠著自學日語，累積了不少心得及筆記。</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><img src="https://hahow.in/images/58f1a9534909c907004abfa6" style="width: 585px; margin: 24px 0px;"></p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">另外，我利用課餘時間製作了<a href="http://www.shurado.com/" style="color: rgb(250, 139, 0); cursor: pointer; outline: none; word-break: break-word; word-wrap: normal; border-bottom: 1px solid rgb(250, 139, 0);">日語八百屋</a>，將自身所學以及文章收錄用週刊的形式分享給大家。目前已經有將近 1000 人訂閱，歡迎對日本有興趣的各位一起訂閱！</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">大學這幾年以來，我將學習到的日文難關以及重點，濃縮成長達 300 分鐘的內容收錄在 Hahow 課程裡頭。希望能夠幫助到想學習日文卻不得其門而入的初學者們。</p><h4 style="line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding-bottom: 8px; border-bottom: 1px solid rgba(0, 0, 0, 0.12);">上課方式</h4><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;">採用投影片搭配課程講義及作業，在課程中針對各個單元做解說。報名這門課，也不需要再花錢買文法書囉！</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><br></p><blockquote style="padding: 2px 0px 2px 16px; margin-top: 24px; margin-bottom: 24px; font-size: 18px; border-left-color: rgb(250, 139, 0); color: rgba(0, 0, 0, 0.87); letter-spacing: 0.1em;">現在，讓我們一起跨出學習日文的門檻，往更高的樓層邁進吧！</blockquote><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"><br></p><br><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"></p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px;"></p></div><h4 class="heading" style="font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; line-height: 1.1; color: rgba(0, 0, 0, 0.65); margin-top: 40px; margin-bottom: 16px; font-size: 23px; padding-bottom: 8px; padding-top: 30px; border-bottom: 1px solid rgba(0, 0, 0, 0.12); word-break: break-word; word-wrap: normal; white-space: pre-wrap; background-color: rgb(243, 243, 241);">常見問題</h4><p class="strongfont" style="margin-top: 5px; margin-bottom: 0px; line-height: 1.8em; color: rgba(0, 0, 0, 0.87); font-size: 16px; font-weight: bolder; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px; font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; background-color: rgb(243, 243, 241);">Q: 請問在哪裡上課？上課時間？</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px; color: rgba(0, 0, 0, 0.65); font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; font-size: 16px; background-color: rgb(243, 243, 241);">Hahow 上面的所有課程都是『線上課程』喔！所以課程上線後，隨時隨地都可以透過手機、平板、與電腦在Hahow上看課程影片，沒有時間和地點的問題！</p><p class="strongfont" style="margin-top: 5px; margin-bottom: 0px; line-height: 1.8em; color: rgba(0, 0, 0, 0.87); font-size: 16px; font-weight: bolder; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px; font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; background-color: rgb(243, 243, 241);">Q: 課程可以看幾次？</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px; color: rgba(0, 0, 0, 0.65); font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; font-size: 16px; background-color: rgb(243, 243, 241);">無限多次！Hahow的課程都可以一直看一直看一直看！</p><p class="strongfont" style="margin-top: 5px; margin-bottom: 0px; line-height: 1.8em; color: rgba(0, 0, 0, 0.87); font-size: 16px; font-weight: bolder; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px; font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; background-color: rgb(243, 243, 241);">Q: 可以問老師問題嗎？</p><p style="margin-top: 16px; margin-bottom: 16px; line-height: 1.8em; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px; color: rgba(0, 0, 0, 0.65); font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; font-size: 16px; background-color: rgb(243, 243, 241);">可以！每個課程單元和作業下方都有留言區，都可以把自己的問題留言給老師，老師收到通知後會儘速來 Hahow 上回答你的問題！</p><p class="strongfont" style="margin-top: 5px; margin-bottom: 0px; line-height: 1.8em; color: rgba(0, 0, 0, 0.87); font-size: 16px; font-weight: bolder; word-break: break-word; word-wrap: normal; white-space: pre-wrap; padding: 0px; font-family: &quot;PingFang TC&quot;, 微軟正黑體, sans-serif; background-color: rgb(243, 243, 241);">Q: 還有其他問題？</p>
				</div>

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
		         <a href="#" class="btn green-bg btn-lg pix-white wide">
		          <span class="pix_edit_text"><b>立即購買</b></span>
		         </a>
		        </div>
		       </div>
		      </div>
		     </div>
		    </div>

		 <!-- Go to www.addthis.com/dashboard to customize your tools -->
      <div class="addthis_inline_share_toolbox"></div>


		 </div>

     <div role="tabpanel" class="tab-pane fade" id="Videos">
			 暫不開放
		 </div>
     <div role="tabpanel" class="tab-pane fade" id="Events">
			 @include('includes.disqus')
		 </div>

   </div>
 </div>

 @include('includes.footer')

@endsection

@section('scripts')

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b48c694fd25b00d"></script>

@endsection
