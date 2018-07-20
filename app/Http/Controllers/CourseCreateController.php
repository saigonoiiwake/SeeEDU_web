<?php

namespace App\Http\Controllers;

use App\CourseCategory;
use App\Profile;
use App\Service\ParameterService;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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

        return view('courses.create.step1_teacher', ['teacher_profile'=> $teacher_profile]);
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
        //return $this->showCourseForm($request);
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
                $profile = Profile::newProfile($request->toArray());
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
        $categories = CourseCategory::all();
        // reconstruct the response
        $categories = $categories->map(function($category)  {
            return [
                'id'   => $category->id,
                'name' => $category->name,
                'level' => $category->level,
                'parent_id' => $category->parent_id,
            ];
        });

        return view('courses.create.step2_course', ['course' => $course, 'categories' => $categories]);
    }

    public function previousStepForCourse(Request $request)
    {
        Log::info($request);

        return redirect('/courses/create/step/teacher');
    }

    public function postCourse(Request $request)
    {
        Log::info($request);

        // Example of request
        //  'title' => 'Japanese N2',
        //  'category-1' => '1',
        //  'category-2' => '3',
        //  'category-3' => '8',
        //  'description' => '<p>Test</p>',
        //  'from_date' => '2018-07-01',
        //  'to_date' => '2018-07-06',
        //  'from_time' => '14:00',
        //  'to_time' => '15:00',
        //  'day_of_week' =>
        //  array (
        //      'monday' => 'monday',
        //  ),
        //  'chapter' =>
        //  array (
        //      1 =>
        //          array (
        //              'from-time' => '2018-07-02T14:00',
        //              'to-time' => '2018-07-02T15:00',
        //              'title' => 'chapter 1',
        //              'description' => 'chapter 1 description',
        //          ),
        //  ),
        //  'min_num' => '22',
        //  'max_num' => '17',
        //  'featured' =>
        //  Illuminate\Http\UploadedFile::__set_state(array(
        //      'test' => false,
        //      'originalName' => 'pikachuchu.jpg',
        //      'mimeType' => 'image/jpeg',
        //      'size' => 17748,
        //      'error' => 0,
        //      'hashName' => NULL,
        //  )),

        $validatedData = $request->validate([
            'title'       => 'required|max:50',
            'category_1'  => 'required|integer',
            'category_2'  => 'required|integer',
            'category_3'  => 'required|integer',
            'featured'    => 'required|file',
            'video'       => 'required|active_url',
            'description' => 'required',
            'from_date'   => 'required|date',
            'to_date'     => 'required|date|after:from_date',
            'from_time'   => 'required|regex:/([0-9][0-9]:[0-9][0-9])/u',
            'to_time'     => 'required|regex:/([0-9][0-9]:[0-9][0-9])/u',
            'day_of_week' => 'required|array|min:1',
            'chapter'     => 'required|array|min:1',
            'min_num'     => 'required|integer|min:1|max:max_num',
            'max_num'     => 'required|integer|min:1',
            'price'       => 'required|integer',
        ]);


        $file = $request->file('featured');
        $timestamp = time();
        $file_name = $timestamp. '-' .$file->getClientOriginalName();
        $file_dir = public_path().'/images/courses/';
        $file->move($file_dir, $file_name);

        $course = [
            'title'       => $validatedData['title'],
            'category_1'  => $validatedData['category_1'],
            'category_2'  => $validatedData['category_2'],
            'category_3'  => $validatedData['category_3'],
            'featured'    => '/images/courses/'. $file_name,
            'video'       => $validatedData['video'],
            'description' => $validatedData['description'],
            'from_date'   => $validatedData['from_date'],
            'to_date'     => $validatedData['to_date'],
            'from_time'   => $validatedData['from_time'],
            'to_time'     => $validatedData['to_time'],
            'day_of_week' => $validatedData['day_of_week'],
            'chapter'     => $validatedData['chapter'],
            'min_num'     => $validatedData['min_num'],
            'max_num'     => $validatedData['max_num'],
            'price'       => $validatedData['price'],
        ];

        $request->session()->put('course', $course);

        return redirect('/courses/create/step/course');
    }

    public function generateChapterTime(Request $request)
    {
        $from_date = $request['from_date'];
        $to_date = $request['to_date'];
        $from_time = $request['from_time'];
        $to_time = $request['to_time'];

        $monday = $request['monday'] === 'true';
        $tuesday = $request['tuesday'] === 'true';
        $wednesday = $request['wednesday'] === 'true';
        $thursday = $request['thursday'] === 'true';
        $friday = $request['friday'] === 'true';
        $saturday = $request['saturday'] === 'true';
        $sunday = $request['sunday'] === 'true';

        $chapters = [];

        if ($monday) {
            $chapters = array_merge($chapters, $this->getListOfDate($from_date, $to_date, $from_time, $to_time, 'Monday'));
        }

        if ($tuesday) {
            $chapters = array_merge($chapters, $this->getListOfDate($from_date, $to_date, $from_time, $to_time, 'Tuesday'));
        }

        if ($wednesday) {
            $chapters = array_merge($chapters, $this->getListOfDate($from_date, $to_date, $from_time, $to_time, 'Wednesday'));
        }

        if ($thursday) {
            $chapters = array_merge($chapters, $this->getListOfDate($from_date, $to_date, $from_time, $to_time, 'Thursday'));
        }

        if ($friday) {
            $chapters = array_merge($chapters, $this->getListOfDate($from_date, $to_date, $from_time, $to_time, 'Friday'));
        }

        if ($saturday) {
            $chapters = array_merge($chapters, $this->getListOfDate($from_date, $to_date, $from_time, $to_time, 'Saturday'));
        }

        if ($sunday) {
            $chapters = array_merge($chapters, $this->getListOfDate($from_date, $to_date, $from_time, $to_time, 'Sunday'));
        }

        sort($chapters);

        return response()->json($chapters);
    }

    protected function getListOfDate($from_date, $to_date, $from_time, $to_time, $day_of_week) {
        $tmp = date('Y-m-d', strtotime('-1 day', strtotime($from_date)));
        $time_list = [];
        while( $tmp < $to_date ) {
            $next_day = date('Y-m-d', strtotime('next '.$day_of_week, strtotime($tmp)));
            if($next_day <= $to_date) {
                $from_datetime = "$next_day"."T"."$from_time";
                $to_datetime = "$next_day"."T"."$to_time";
                $time_list[] = [
                    "from_datetime" => $from_datetime,
                    "to_datetime" =>$to_datetime
                ];
            }
            $tmp = date('Y-m-d', strtotime('+1 day', strtotime($next_day)));
        }

        return $time_list;
    }
}