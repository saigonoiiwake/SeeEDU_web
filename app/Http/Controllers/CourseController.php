<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Course;
use App\Chapter;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $course = Course::find($id);

        Log::info($course);

        $chapter = $course->chapter;

        Log::info($chapter);

        return view('course', ['course' => $course, 'chapters' => $chapter]);
    }
}
