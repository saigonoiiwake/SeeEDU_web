<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseCreateController
{
    public function teacherProfile(Request $request)
    {
        Log::info($request);
        return redirect('/courses/create/step/course');
    }
}
