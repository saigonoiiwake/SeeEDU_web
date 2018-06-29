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
                    @foreach($courses as $course)
                            <tr>
                                <td><a href="/course/{{ $course->id }}">{{ $course->id }}</a></td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->status }}</td>
                                <td>{{ $course->start_date }}</td>
                            </tr>
                    @endforeach
                    </table>
                </div>
            </div>

            <div>
                <button onclick="window.location.href='/create_course'" class="btn btn-default">Create Course</button>
            </div>
        </div>
    </div>
</div>
@endsection
