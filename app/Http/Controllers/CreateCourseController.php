<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Course;
use App\Chapter;

class CreateCourseController extends Controller
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
    public function index()
    {
        return view('create_course');
    }

    /**
     * Show the application dashboard.
     *
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Log::info($request);

        $course = Course::create([
            'id'    => Course::generateIdSafe(),
            'title' => $request['title'],
            'status' => 'reviewing',
            'category_id' => 1,
            'enroll_num' => 12,
            'min_num' => 1,
            'max_num' => 100,
            'currency_id' => 1,
            'price' => 100,
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);

        Log::info($course);
        Log::info($course->id);

        $chapters = $request['chapter'];
        foreach ($chapters as $chapter) {
            $c = Chapter::create([
                'title' => 'title',
                'introduction' => 'inter',
                'course_id' => $course->id,
                'order' => Chapter::generateOrder($course->id),
                'from_time' => $chapter['from_time'],
                'to_time' => $chapter['to_time'],
            ]);
            Log::info($c);
        }

        return view('home');
    }
}
