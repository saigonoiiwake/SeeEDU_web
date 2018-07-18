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
		<form class="form" action="/courses/create/step/course" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="panel-heading">
			 課程基本資訊
			</div>
			<div class="panel-body">
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label for="from_date">課程開始日期</label><span class="required">*</span>
					  <input type="date" class="form-control" id="from_date" placeholder="2018/04/06" name="from_date" value="{{ $course['from_date'] or '' }}">
					</div>

				 	<div class="form-group col-md-6">
					  <label for="to_date">課程結束日期</label><span class="required">*</span>
					  <input type="date" class="form-control" id="to_date" placeholder="2018/09/06" name="to_date" value="{{ $course['to_date'] or '' }}">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
				  		<label for="from_time">上課時間</label><span class="required">*</span>
				  		<input type="time" class="form-control" id="from_time" placeholder="15:00" name="from_time" value="{{ $course['from_time'] or '' }}">
					</div>
					<div class="form-group col-md-6">
					  <label for="to_time">下課時間</label><span class="required">*</span>
					  <input type="time" class="form-control" id="to_time" placeholder="17:00" name="to_time" value="{{ $course['to_time'] or '' }}">
					</div>
				</div>

				<div class="form-group">
					<div class="form-check form-check-inline col-md-3">
						<label>開課星期</label><span class="required">*</span>
					</div>
					<div class="form-check form-check-inline col-md-1">
						<input class="form-check-input" type="checkbox" id="monday" value="monday" {{ $course['monday'] or false? 'checked' : '' }}>
						<label class="form-check-label" for="monday">一</label>
					</div>

					<div class="form-check form-check-inline col-md-1">
						<input class="form-check-input" type="checkbox" id="tuesday" value="tuesday" {{ $course['tuesday'] or false? 'checked' : '' }}>
						<label class="form-check-label" for="tuesday">二</label>
					</div>

					<div class="form-check form-check-inline col-md-1">
						<input class="form-check-input" type="checkbox" id="wednesday" value="wednesday" {{ $course['wednesday'] or false? 'checked' : '' }}>
						<label class="form-check-label" for="wednesday">三</label>
					</div>

					<div class="form-check form-check-inline col-md-1">
						<input class="form-check-input" type="checkbox" id="thursday" value="thursday" {{ $course['thursday'] or false? 'checked' : '' }}>
						<label class="form-check-label" for="thursday">四</label>
					</div>

					<div class="form-check form-check-inline col-md-1">
						<input class="form-check-input" type="checkbox" id="friday" value="friday" {{ $course['friday'] or false? 'checked' : '' }}>
						<label class="form-check-label" for="friday">五</label>
					</div>

					<div class="form-check form-check-inline col-md-1">
						<input class="form-check-input" type="checkbox" id="saturday" value="saturday" {{ $course['saturday'] or false? 'checked' : '' }}>
						<label class="form-check-label" for="saturday">六</label>
					</div>

					<div class="form-check form-check-inline col-md-3">
						<input class="form-check-input" type="checkbox" id="sunday" value="sunday" {{ $course['sunday'] or false? 'checked' : '' }}>
						<label class="form-check-label" for="sunday">日</label>
					</div>

					<div class="col-md-1">
						<input type="button" class="btn btn-info" onclick="generateChapter()" value="生成章節"/>
					</div>
				</div>
			</div>

			<div class="panel-heading" id="chapter-heading" hidden="hidden">
				章節基本資訊
			</div>
			<div class="panel-body" id="chapter-body" hidden="hidden">

			</div>

			<div class="panel-heading">
				 定價與學生人數
			</div>
			<div class="panel-body">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="min_num">課程人數下限</label><span class="required">*</span>
						<input type="number" class="form-control" id="min_num" placeholder="" name="min_num" value="{{ $course['min_num'] or '' }}">
					</div>

					<div class="form-group col-md-6">
						<label for="max_num">課程人數上限</label><span class="required">*</span>
						<input type="number" class="form-control" id="max_num" placeholder="" name="max_num" value="{{ $course['max_num'] or '' }}">
					</div>

				</div>

				<div class="form-group">
					<div class="form-row col-md-12">
						<label for="price">課程售價(新台幣)</label><span class="required">*</span>
						<input type="number" class="form-control" id="price" placeholder="" value="{{ $course['price'] or '' }}">
					</div>
				</div>

			</div>

			<div class="panel-heading">
				 課程介紹
			</div>
			<div class="panel-body">
				<div class="form-group col-md-12" >
					<label for="content">好的文案可以帶來更多的學生</label>
					<textarea name="content" id="content" rows="10" cols="5" class="form-control" >{{ $course['content'] or '' }}</textarea>
				</div>
			</div>

			<div class="panel-footer">
				<button class="btn btn-info" type="submit">上一步</button>
				<button class="btn btn-success col-md-8" type="submit">下一步</button>
				<button class="btn btn-default" type="submit">暫存離開</button>
			</div>
		</form>

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

	var numberOfChapter = 0;

    function generateChapter() {

        var fromDate = document.getElementById('from_date').value;
        var toDate = document.getElementById('to_date').value;
        var fromTime = document.getElementById('from_time').value;
        var toTime = document.getElementById('to_time').value;

        if (!fromDate || !toDate || !fromTime || !toTime || fromTime > toTime) {
			return;
		}

        $.get({
			type: 'GET',
			url : "{{ route('/courses/create/generate/chapter') }}",
			data: {
			    from_date: fromDate,
				to_date: toDate,
				from_time: fromTime,
				to_time: toTime,
				monday: document.getElementById('monday').checked,
        		tuesday: document.getElementById('tuesday').checked,
				wednesday: document.getElementById('wednesday').checked,
				thursday: document.getElementById('thursday').checked,
        		friday: document.getElementById('friday').checked,
        		saturday: document.getElementById('saturday').checked,
				sunday: document.getElementById('sunday').checked
            },
			success: function(data) {
			    console.log(data);

			    if (data.length > 0) {
                    numberOfChapter = data.length;
                    console.log("here");
                    $("#chapter-body").empty();
                    $("#chapter-heading").show();
                    $("#chapter-body").show();

                    data.forEach( function(value, index, array) {
                        var id = index + 1;
                        $("#chapter-body").append(
                            '<div class="form-group" id="chapter-'+ id +'">\n' +
                            '   <div class="form-row col-md-12">\n' +
                            '        <h5><br>Chapter ' + id + '</h5>\n' +
                            '   </div>\n' +
                            '   <div class="form-row">\n' +
                            '        <div class="form-group col-md-6">\n' +
                            '              <label for="time">From Time</label>\n' +
                            '              <input type="datetime-local" class="form-control" id="from-time-'+ id +'" value="'+value['from_datetime']+'">\n' +
                            '        </div>\n' +
                            '        <div class="form-group col-md-6">\n' +
                            '              <label for="time">To Time</label>\n' +
                            '              <input type="datetime-local" class="form-control" id="to-time-'+ id +'" value="'+value['to_datetime']+'">\n' +
                            '        </div>\n' +
                            '   </div>\n' +
                            '   <div class="form-row col-md-12">\n' +
                            '        <label for="introduction">Introduction</label>\n' +
                            '        <textarea rows="2" cols="5" class="form-control" id="introduction-' + id +'"></textarea>\n' +
                            '   </div>\n' +
                            '   <div class="form-row col-md-12">\n' +
                            '       <input type="button" class="btn btn-danger" onclick="deleteChapter('+ id +')" value="delete"/>\n' +
                            '   </div>\n' +
                            '</div>'
                        );

                    });

				} else {
                    numberOfChapter = 0;
                    $("#chapter-heading").hide();
                    $("#chapter-body").hide();
                    $("#chapter-body").empty();
				}
			}
		});
	}

    function deleteChapter(id) {
    	$("#chapter-" + id).remove();
    }

	$(document).ready(function() {
		$('#content').summernote();
	});
</script>

@endsection
