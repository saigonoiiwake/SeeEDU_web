<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseCategory;
use App\CourseDescription;
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

    public function showContract()
    {
        return view('courses.create.step1_contract');
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

        return view('courses.create.step2_teacher', ['teacher_profile'=> $teacher_profile]);
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

        return view('courses.create.step3_course', ['course' => $course, 'categories' => $categories]);
    }

    public function previousStepForCourse(Request $request)
    {
        $course = [
            'title'       => $request['title'],
            'category_1'  => $request['category_1'],
            'category_2'  => $request['category_2'],
            'category_3'  => $request['category_3'],
            'video'       => $request['video'],
            'description' => $request['description'],
            'from_date'   => $request['from_date'],
            'to_date'     => $request['to_date'],
            'from_time'   => $request['from_time'],
            'to_time'     => $request['to_time'],
            'day_of_week' => $request['day_of_week'],
            'chapter'     => $request['chapter'],
            'min_num'     => $request['min_num'],
            'max_num'     => $request['max_num'],
            'price'       => $request['price'],
        ];
        $request->session()->put('course', $course);

        return redirect('/courses/create/step/teacher');
    }

    public function submitCourse(Request $request)
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


        DB::beginTransaction();

        try {
            $file = $request->file('featured');
            $timestamp = time();
            $file_name = $timestamp. '-' .$file->getClientOriginalName();
            $file_dir = public_path().'/images/courses/';
            $file->move($file_dir, $file_name);

            $course_param = [
                'title'               => $validatedData['title'],
                'course_category_id'  => $validatedData['category_3'],
                'featured'    => $file_name,
                'video'       => $validatedData['video'],
                'from_date'   => $validatedData['from_date'],
                'to_date'     => $validatedData['to_date'],

                'min_num'     => $validatedData['min_num'],
                'max_num'     => $validatedData['max_num'],
                'currency_id' => 1,
                'price'       => $validatedData['price'],
                'data'        => [
                    'day_of_week' => array_values($validatedData['day_of_week']),
                    'from_time'   => $validatedData['from_time'],
                    'to_time'     => $validatedData['to_time'],
                    'chapter'     => $validatedData['chapter'],
                ],
            ];

            $course = Course::newCourse($course_param);

            $course_description = CourseDescription::newCourseDescription([
                'course_id' => $course->id,
                'description' => $validatedData['description']
            ]);

            $teacher_profile = $request->session()->get('teacher_profile');

            $user = User::find(auth()->user()->id);
            $user->name = $teacher_profile['name'];
            $user->nick_name = $teacher_profile['nick_name'];
            $user->save();

            $profile = $user->profile;
            if($profile === null) {
                $profile = Profile::newProfile($teacher_profile->toArray());
                $profile->save();
            } else {
                $profile->birthday = $teacher_profile['birthday'];
                $profile->phone_number = $teacher_profile['phone_number'];
                $profile->education = json_encode($teacher_profile['education']);
                $profile->experience = json_encode($teacher_profile['experience']);
                $profile->about = $teacher_profile['about'];
                $profile->save();
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        $request->session()->forget('teacher_profile');
        $request->session()->forget('course');

        return view('courses.create.complete', [ 'id' => $course->id ]);
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
