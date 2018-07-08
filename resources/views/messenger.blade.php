@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="card-body">
                        <messenger-app :user="{{ auth()->user() }}"> </messenger-app>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
