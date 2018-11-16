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

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@landing')->name('home');

// Route::get('/spg', 'SPGController@spgpay');
Route::post('/course/spgcheckout/{id}', [
  'uses' => 'SPGController@pay',
  'as' => 'course.spgcheckout'
]);
Route::post('/spgreturn', 'SPGController@return');
Route::post('/spgnotify', 'SPGController@notify');

Route::get('/courses/category/{id}', [
  'uses' => 'CourseController@category',
  'as' => 'course.category.single'
]);

Route::post('/coupon/{id}','CouponsController@getCode')->name('coupon.getCode');
Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');

Route::get('/courses', [
  'uses' => 'CourseController@index',
  'as' => 'courses'
]);

Route::get('/course/{id}', [
  'uses' => 'CourseController@singleCourse',
  'as' => 'course.single'
]);

Route::post('/course/checkout/{id}', [
  'uses' => 'CheckoutController@pay',
  'as' => 'course.checkout'
]);

Route::get('/course/checkout/login/{id}', [
    'uses' => 'CheckoutController@login',
    'as' => 'course.checkout.login'
]);

Route::get('/course/checkout/success', function() {
  return view('courses.PurchaseSuccessful');
})->name('PurchaseSuccessful');


Route::get('/about', function () {
    return view('static.about');
})->name('about');


Route::get('/qa', function () {
    return view('static.qa');
})->name('qa');

Route::get('/policies', function () {
    return view('static.policies');
})->name('policies');

Route::get('/joinus', function () {
    return view('static.joinus');
})->name('joinus');

Route::get('/how-to-take-courses', function () {
    return view('static.howtotakecourses');
})->name('howtotakecourses');

Route::get('/courses/create', function () {
    return view('courses.create.welcome');
})->name('/courses/create/welcome');

Route::get('/courses/create/step/contract', 'CourseCreateController@showContract')
    ->name('/courses/create/step/contract');

Route::get('/courses/create/step/teacher', 'CourseCreateController@showTeacherProfileForm')
    ->name('/courses/create/step/teacher');

Route::post('/courses/create/step/teacher', 'CourseCreateController@postTeacherProfile');

Route::post('/courses/create/step/teacher/save', 'CourseCreateController@saveTeacherProfile');

Route::get('/courses/create/step/course', 'CourseCreateController@showCourseForm')
    ->name('/courses/create/step/course');

Route::post('/courses/create/step/submit', 'CourseCreateController@submitCourse');

Route::post('/courses/create/step/course/previous', 'CourseCreateController@previousStepForCourse');

Route::post('/courses/create/step/course/save', 'CourseCreateController@saveCourseDraft');

Route::get('/courses/create/complete', 'CourseCreateController@complete')
    ->name('/courses/create/complete');

Route::get('/courses/create/generate/chapter', 'CourseCreateController@generateChapterTime')
    ->name('/courses/create/generate/chapter');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider_FB')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback_FB');

Route::get('login/google', 'Auth\LoginController@redirectToProvider_G')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback_G');


Route::get('/blog', [
  'uses' => 'BlogController@index',
  'as' => 'blog.index'
]);

Route::get('/blog/{slug}', [
  'uses' => 'BlogController@singlePost',
  'as' => 'post.single'
]);

Route::get('/blog/category/{id}', [
  'uses' => 'BlogController@category',
  'as' => 'blog.category.single'
]);

Route::get('/blog/tag/{id}', [
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




/*
Route::get('/mypage', function () {
    return view('mypage');
})->name('mypage');

Route::get('/mycourse', function () {
    return view('mycourse');
})->name('mycourse');

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
  'as' => 'Blogcategory.single'
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
*/
