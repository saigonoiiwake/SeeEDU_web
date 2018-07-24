<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
      return view('courses')->with('courses', Course::all());
    }

    public function singleCourse($id)
    {
      $course = Course::where('id', $id)->first();

      return view('single_course')->with('course', $course);

    }
}
