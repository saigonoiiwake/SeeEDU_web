<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Service\ParameterService;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class CourseCreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showTeacherProfileForm(Request $request)
    {
        $teacher_profile = $request->session()->get('teacher_profile');
        if (empty($teacher_profile)) {
            $user = User::find(auth()->user()->id);
            $profile = $user->profile;

            $teacher_profile = [
                'name'         => $user->name,
                'nick_name'    => $user->nick_name,
                'birthday'     => $profile ? $profile->birthday : '',
                'phone_number' => $profile ? $profile->phone_number : '',
                'education'    => $profile ? $profile->getEducation() : '',
                'experience'   => $profile ? $profile->getExperience() : '',
                'about'        => $profile ? $profile->about : '',
            ];

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
            'education.*'  => 'required',
            'experience.*' => 'required',
            'about'        => 'required|max:50',
        ]);

        $teacher_profile = [
            'name'         => $validatedData['name'],
            'nick_name'    => $validatedData['nick_name'],
            'birthday'     => $validatedData['birthday'],
            'phone_number' => $validatedData['phone_number'],
            'education'    => $validatedData['education'],
            'experience'   => $validatedData['experience'],
            'about'        => $validatedData['about'],
        ];
        $request->session()->put('teacher_profile', $teacher_profile);

        return redirect('/courses/create/step/course');
    }

    public function saveTeacherProfile(Request $request)
    {
        $request->validate([
            'nick_name' => 'required',
            'birthday'  => 'date',
            'about'     => 'max:50',
        ]);

        DB::beginTransaction();

        try {
            $user = User::find(auth()->user()->id);
            $user->name = $request['name'];
            $user->nick_name = $request['nick_name'];
            $user->save();

            $profile = $user->profile;
            if($profile === null) {
                $profile = Profile::newProfile($request);
                $profile->save();
            } else {
                $profile->birthday = $request['birthday'];
                $profile->phone_number = $request['phone_number'];
                $profile->education = json_encode($request['education']);
                $profile->experience = json_encode($request['experience']);
                $profile->about = $request['about'];
                $profile->save();
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        $request->session()->forget('teacher_profile');

        return redirect('/');
    }

    public function showCourseForm(Request $request) {
        $course = $request->session()->get('course');
        return view('courses.create.step2_course', compact('course', $course));
    }
}
