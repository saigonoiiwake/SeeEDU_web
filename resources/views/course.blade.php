@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <table style="width:100%">
                            <tr>
                                <th>Course Id</th>
                                <th>Course Name</th>
                                <th>Course Status</th>
                                <th>Start Date</th>
                            </tr>
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->status }}</td>
                                <td>{{ $course->start_date }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Chapter</div>

                    <div class="panel-body">
                        <table style="width:100%">
                            <tr>
                                <th>Chapter Order</th>
                                <th>Chapter Title</th>
                                <th>Chapter Introduction</th>
                                <th>From Time</th>
                                <th>To Time</th>
                            </tr>
                            @foreach($chapters as $chapter)
                                <tr>
                                    <td>{{ $chapter->order }}</td>
                                    <td>{{ $chapter->title }}</td>
                                    <td>{{ $chapter->introduction }}</td>
                                    <td>{{ $chapter->from_time }}</td>
                                    <td>{{ $chapter->to_time }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
