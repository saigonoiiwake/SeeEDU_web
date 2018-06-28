@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/create_course" method="post" enctype='application/json'>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                    <label for="start_date">Start Date</label>
                    <textarea class="form-control" id="start_date" name="start_date" placeholder="start_date">{{ old('start_date') }}</textarea>
                    @if($errors->has('start_date'))
                        <span class="help-block">{{ $errors->first('start_date') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                    <label for="end_date">End Date</label>
                    <textarea class="form-control" id="end_date" name="end_date" placeholder="end_date">{{ old('end_date') }}</textarea>
                    @if($errors->has('end_date'))
                        <span class="help-block">{{ $errors->first('end_date') }}</span>
                    @endif
                </div>
                @for ($i = 1; $i < 3; $i++)
                    <div class="form-group{{ $errors->has('chapter') ? ' has-error' : '' }}">
                        <label for="chapter">Chapter {{ $i }}</label>
                        <textarea class="form-control" id="chapter" name="chapter[{{ $i }}][from_time]" placeholder="from time">{{ old('chapter') }}</textarea>
                        <textarea class="form-control" id="chapter" name="chapter[{{ $i }}][to_time]" placeholder="to time">{{ old('chapter') }}</textarea>
                        @if($errors->has('chapter'))
                            <span class="help-block">{{ $errors->first('chapter') }}</span>
                        @endif
                    </div>
                @endfor

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection