<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class CourseCreateController
{
    public function showTeacherProfileForm(Request $request)
    {
        $teacher_profile = $request->session()->get('teacher_profile');
        if (empty($teacher_profile)) {
            $teacher_profile['nick_name'] = auth()->user()->nick_name;
        }
        return view('courses.create.step1_teacher', compact('teacher_profile', $teacher_profile));
    }

    public function postTeacherProfile(Request $request)
    {
        $validatedData = $request->validate([
            'name'         => 'required',
            'nick_name'    => 'required',
            'birthday'     => 'required|date',
            'phone_number' => 'required',
            'education'    => 'required',
            'experience'   => 'required',
            'content'      => 'required|max:50',
        ]);

        $teacher_profile = [
            'name'         => $validatedData['name'],
            'nick_name'    => $validatedData['nick_name'],
            'birthday'     => $validatedData['birthday'],
            'phone_number' => $validatedData['phone_number'],
            'education'    => $validatedData['education'],
            'experience'   => $validatedData['experience'],
            'content'      => $validatedData['content'],
        ];
        $request->session()->put('teacher_profile', $teacher_profile);

        return redirect('/courses/create/step/course');
    }
}
