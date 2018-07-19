<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/courses', [
  'uses' => 'CourseController@index',
  'as' => 'courses'
]);

Route::get('/course/{id}', [
  'uses' => 'CourseController@singleCouse',
  'as' => 'course.single'
]);


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/messenger', 'MessengerController@index')->name('messenger');

Route::get('/messenger/friendships', 'MessengerController@getFriendship');

Route::get('/messenger/getMessages/{id}', 'MessengerController@getMessagesFor');
Route::post('/messenger/send', 'MessengerController@send');

Route::get('/blogs', [
  'uses' => 'BlogController@index',
  'as' => 'index'
]);

Route::get('/blog/{slug}', [
  'uses' => 'BlogController@singlePost',
  'as' => 'post.single'
]);

Route::get('/category/{id}', [
  'uses' => 'BlogController@category',
  'as' => 'category.single'
]);

Route::get('/tag/{id}', [
  'uses' => 'BlogController@tag',
  'as' => 'tag.single'
]);

Route::get('/results', function(){
  $posts = \App\BlogPost::where('title', 'like', '%' . request('query') . '%')->get();

  return view('results')->with('posts', $posts)
                        ->with('title', 'Search results:' . request('query'))
                        ->with('settings', \App\Setting::first())
                        ->with('categories', \App\BlogCategory::take(5)->get())
                        ->with('query', request('query'));
});




Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/mypage', function () {
    return view('mypage');
})->name('mypage');

Route::get('/mycourse', function () {
    return view('mycourse');
})->name('mycourse');

Route::get('/qa', function () {
    return view('qa');
})->name('qa');

Route::get('/policies', function () {
    return view('policies');
})->name('policies');

Route::get('/joinus', function () {
    return view('joinus');
})->name('joinus');

Route::get('/courses/create', function () {
    return view('courses.create.welcome');
})->name('/courses/create/welcome');

Route::get('/courses/create/step/teacher', 'CourseCreateController@showTeacherProfileForm')
    ->name('/courses/create/step/teacher');

Route::post('/courses/create/step/teacher', 'CourseCreateController@postTeacherProfile');

Route::post('/courses/create/step/teacher/save', 'CourseCreateController@saveTeacherProfile');

Route::get('/courses/create/step/course', 'CourseCreateController@showCourseForm')
    ->name('/courses/create/step/course');

Route::post('/courses/create/step/course', 'CourseCreateController@postCourse');

Route::post('/courses/create/step/course/previous', 'CourseCreateController@previousStepForCourse');

Route::get('/courses/create/step/contract', function () {
    return view('courses.create.step3_contract');
})->name('/courses/create/step/contract');

Route::get('/courses/create/complete', function () {
    return view('courses.create.complete');
})->name('/courses/create/complete');

Route::get('/how-to-take-courses', function () {
    return view('howtotakecourses');
})->name('howtotakecourses');


Route::get('/courses/create/generate/chapter', 'CourseCreateController@generateChapterTime')
    ->name('/courses/create/generate/chapter');;
