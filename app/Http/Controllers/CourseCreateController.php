<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\Course;
use App\CourseCategory;
use App\CourseDescription;
use App\CourseDraft;
use App\Identity;
use App\Profile;
use App\Service\ChapterService;
use App\Service\ParameterService;
use App\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Mockery\Exception;

class CourseCreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showContract(Request $request)
    {
        $request->session()->put('signed_contract', true);

        return view('courses.create.step1_contract');
    }

    public function complete(Request $request)
    {
        $course_id = $request->session()->get('course_id');

        if (empty($course_id)) {
            return redirect('/courses/create');
        }

        return view('courses.create.complete', ['course_id' => $course_id]);
    }

    public function showTeacherProfileForm(Request $request)
    {
        $signed_contract = $request->session()->get('signed_contract');
        if (empty($signed_contract)) {
            return redirect('/courses/create/step/contract');
        }

        $teacher_profile = $request->session()->get('teacher_profile');
        if (empty($teacher_profile)) {
            $user = User::find(auth()->user()->id);
            $profile = $user->profile;

            $teacher_profile = [
                'name'         => $user->name,
                'nick_name'    => $user->nick_name,
                'avatar'       => $user->avatar,
                'birthday'     => $profile ? $profile->birthday : '',
                'phone_number' => $profile ? $profile->phone_number : '',
                'education'    => $profile ? $profile->getEducation() : '',
                'experience'   => $profile ? $profile->getExperience() : '',
                'about'        => $profile ? $profile->about : '',
            ];
        }

        if(!array_key_exists('avatar', $teacher_profile)) {
            $teacher_profile['avatar'] = auth()->user()->avatar;
        }

        $request->session()->forget('teacher_profile');

        return view('courses.create.step2_teacher', ['teacher_profile' => $teacher_profile]);
    }

    public function postTeacherProfile(Request $request)
    {
        $teacher_profile = [
            'name'         => $request['name'],
            'nick_name'    => $request['nick_name'],
            'birthday'     => $request['birthday'],
            'phone_number' => $request['phone_number'],
            'education'    => $request['education'],
            'experience'   => $request['experience'],
            'about'        => $request['about'],
        ];
        // avoid validate error, remain the old data for showTeacherProfileForm
        $request->session()->put('teacher_profile', $teacher_profile);

        $validatedData = $request->validate([
            'name'         => 'required',
            'nick_name'    => 'required',
            'birthday'     => 'required|date',
            'phone_number' => 'required',
            'education.0'  => 'required',
            'experience.0' => 'required',
            'about'        => 'required|max:50',
        ]);

        DB::beginTransaction();

        try {
            $user = User::find(auth()->user()->id);
            $user->name = $validatedData['name'];
            $user->nick_name = $validatedData['nick_name'];
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $timestamp = time();
                $file_name = $timestamp . '-' . $file->getClientOriginalName();
                $file_dir = public_path() . '/app/images/uploads/avatars/';
                $file->move($file_dir, $file_name);
                $user->avatar = '/app/images/uploads/avatars/' . $file_name;
            }

            $user->save();

            $profile = $user->profile;
            if ($profile === null) {
                $profile = Profile::newProfile($validatedData);
                $profile->save();
            } else {
                $profile->birthday = $validatedData['birthday'];
                $profile->phone_number = $validatedData['phone_number'];
                $profile->education = json_encode(array_filter($validatedData['education']));
                $profile->experience = json_encode(array_filter($validatedData['experience']));
                $profile->about = $validatedData['about'];
                $profile->save();
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        $request->session()->put('save_teacher', true);
        $request->session()->forget('teacher_profile');

        return redirect('/courses/create/step/course');
    }

    public function saveTeacherProfile(Request $request)
    {
        $teacher_profile = [
            'name'         => $request['name'],
            'nick_name'    => $request['nick_name'],
            'birthday'     => $request['birthday'],
            'phone_number' => $request['phone_number'],
            'education'    => $request['education'],
            'experience'   => $request['experience'],
            'about'        => $request['about'],
        ];
        $request->session()->put('teacher_profile', $teacher_profile);

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
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $timestamp = time();
                $file_name = $timestamp . '-' . $file->getClientOriginalName();
                $file_dir = public_path() . '/images/avatar/';
                $file->move($file_dir, $file_name);
                $user->avatar = '/images/avatar/' . $file_name;
            }
            $user->save();

            $profile = $user->profile;
            if ($profile === null) {
                $profile = Profile::newProfile($request->toArray());
                $profile->save();
            } else {
                $profile->birthday = $request['birthday'];
                $profile->phone_number = $request['phone_number'];
                $profile->education = json_encode(array_filter($request['education']));
                $profile->experience = json_encode(array_filter($request['experience']));
                $profile->about = $request['about'];
                $profile->save();
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        $request->session()->forget('course');
        $request->session()->forget('save_teacher');
        $request->session()->forget('signed_contract');
        $request->session()->forget('teacher_profile');

        return redirect('/');
    }

    public function showCourseForm(Request $request)
    {
        $save_teacher = $request->session()->get('save_teacher');
        if (empty($save_teacher)) {
            return redirect('/courses/create');
        }

        $course = $request->session()->get('course');
        $categories = CourseCategory::all();
        // reconstruct the response
        $categories = $categories->map(function ($category) {
            return [
                'id'        => $category->id,
                'name'      => $category->name,
                'level'     => $category->level,
                'parent_id' => $category->parent_id,
            ];
        });

        $course_drafts = auth()->user()->courseDraft;

        return view('courses.create.step3_course', ['course' => $course, 'categories' => $categories, 'course_drafts' => $course_drafts]);
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
            'day_of_week' => ParameterService::get($request,'day_of_week', []),
            'chapter'     => ParameterService::get($request,'chapter', []),
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

        // reindex chapter and sort it by time
        $chapter = array_values(ParameterService::get($request,'chapter', []));
        sort($chapter);
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
            'day_of_week' => ParameterService::get($request,'day_of_week', []),
            'chapter'     => $chapter,
            'min_num'     => $request['min_num'],
            'max_num'     => $request['max_num'],
            'price'       => $request['price'],
        ];
        $request->session()->put('course', $course);

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
        //              'from_datetime' => '2018-07-02T14:00',
        //              'to_datetime' => '2018-07-02T15:00',
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
            'title'       => 'required|max:16',
            'category_1'  => 'required|integer',
            'category_2'  => 'required|integer',
            'category_3'  => 'required|integer',
            'featured'    => 'required|file',
            'video'       => 'required|active_url',
            'description' => 'required',
            // start date should be large than 10 day from today
            'from_date'   => 'required|date|after:' . date('Y-m-d', strtotime('+10 day')),
            'to_date'     => 'required|date|after:from_date',
            'from_time'   => 'required|regex:/([0-9][0-9]:[0-9][0-9])/u',
            'to_time'     => 'required|regex:/([0-9][0-9]:[0-9][0-9])/u',
            'day_of_week' => 'required|array|min:1',
            'chapter'     => ['required', 'array', 'min:1', new \App\Rules\Chapter($request['from_date'], $request['to_date'])],
            'min_num'     => 'required|integer|min:1|max:max_num',
            'max_num'     => 'required|integer|min:1',
            'price'       => 'required|integer',
        ]);

        DB::beginTransaction();

        try {
            $file = $request->file('featured');
            $timestamp = time();
            $file_name = $timestamp . '-' . $file->getClientOriginalName();
            $file_dir = public_path() . '/app/images/uploads/courses/';
            $file->move($file_dir, $file_name);

            $chapters = array_values($validatedData['chapter']);
            sort($validatedData['chapter']);

            $course_param = [
                'title'              => $validatedData['title'],
                'course_category_id' => $validatedData['category_3'],
                'featured'           => '/app/images/uploads/courses/' . $file_name,
                'video'              => $validatedData['video'],
                'from_date'          => $validatedData['from_date'],
                'to_date'            => $validatedData['to_date'],

                'min_num'     => $validatedData['min_num'],
                'max_num'     => $validatedData['max_num'],
                'currency_id' => 1,
                'price'       => $validatedData['price'],
                'data'        => [
                    'day_of_week' => array_values($validatedData['day_of_week']),
                    'from_time'   => $validatedData['from_time'],
                    'to_time'     => $validatedData['to_time'],
                    'chapter'     => $chapters,
                ],
            ];

            // course
            $course = Course::newCourse($course_param);

            CourseDescription::newCourseDescription([
                'course_id'   => $course->id,
                'description' => $validatedData['description'],
            ]);

            // chapter
            foreach ($chapters as $chapter) {
                Chapter::newChapter([
                    'course_id'   => $course->id,
                    'title'       => $chapter['title'],
                    'description' => $chapter['description'],
                    'from_time'   => $chapter['from_datetime'],
                    'to_time'     => $chapter['to_datetime'],
                    'data'        => $chapter,
                ]);
            }

            // generate identity
            Identity::newIdentity([
                'course_id' => $course->id,
                'user_id'   => auth()->id(),
                'role_id'   => 1,
            ]);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        $request->session()->forget('course');
        $request->session()->forget('save_teacher');
        $request->session()->forget('signed_contract');
        $request->session()->forget('teacher_profile');

        return redirect('/courses/create/complete')->with(['course_id' => $course->id]);
    }

    public function saveCourseDraft(Request $request)
    {
        DB::beginTransaction();

        try {
            $draft_param = [
                'title'              => $request['title'],
                'course_category_id' => $request['category_3'],
                'video'              => $request['video'],
                'from_date'          => $request['from_date'],
                'to_date'            => $request['to_date'],
                'min_num'            => $request['min_num'],
                'max_num'            => $request['max_num'],
                'currency_id'        => 1,
                'price'              => $request['price'],
                'description'        => $request['description'],
                'chapter'            => $request['chapter'],
                'data'               => [
                    'day_of_week' => $request['day_of_week'],
                    'from_time'   => $request['from_time'],
                    'to_time'     => $request['to_time'],
                    'category_1'  => $request['category_1'],
                    'category_2'  => $request['category_2'],
                    'category_3'  => $request['category_3'],
                ],
            ];

            CourseDraft::newCourseDraft($draft_param);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        $request->session()->forget('teacher_profile');
        $request->session()->forget('course');
        $request->session()->forget('signed_contract');
        $request->session()->forget('teacher_profile');

        return redirect('/');
    }

    public function generateChapterTime(Request $request)
    {
        $from_date = $request['from_date'];
        $to_date = $request['to_date'];
        $from_time = $request['from_time'];
        $to_time = $request['to_time'];

        $day_of_week = [];

        $day_of_week[] = $request['monday'] === 'true' ? 'Monday' : null;
        $day_of_week[] = $request['tuesday'] === 'true' ? 'Tuesday' : null;
        $day_of_week[] = $request['wednesday'] === 'true' ? 'Wednesday' : null;
        $day_of_week[] = $request['thursday'] === 'true' ? 'Thursday' : null;
        $day_of_week[] = $request['friday'] === 'true' ? 'Friday' : null;
        $day_of_week[] = $request['saturday'] === 'true' ? 'Saturday' : null;
        $day_of_week[] = $request['sunday'] === 'true' ? 'Sunday' : null;

        $chapters = ChapterService::generateChapterTime($from_date, $to_date, $from_time, $to_time, array_filter($day_of_week));

        return response()->json($chapters);
    }
}
