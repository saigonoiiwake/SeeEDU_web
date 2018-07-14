<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseCreateController
{
    public function createTeacherProfile(Request $request)
    {
        $teacher_profile = $request->session()->get('teacher_profile');
        return view('courses.create.step1_teacher', compact('teacher_profile', $teacher_profile));
    }

    public function teacherProfile(Request $request)
    {
        Log::info($request);
//        $validatedData = $request->validate([
//            'name' => 'required|unique:products',
//            'amount' => 'required|numeric',
//            'company' => 'required',
//            'available' => 'required',
//            'description' => 'required',
//        ]);

        $teacher_profile = [
            'name'         => $request['name'],
            'nick_name'    => $request['nick_name'],
            'birthday'     => $request['birthday'],
            'phone_number' => $request['phone_number'],
            'education'    => $request['education'],
            'experience'   => $request['experience'],
            'content'      => $request['content'],
        ];
        $request->session()->put('teacher_profile', $teacher_profile);

        return redirect('/courses/create/step/course');
    }
}
