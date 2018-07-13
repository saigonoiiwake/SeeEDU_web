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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

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

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/qa', function () {
    return view('qa');
})->name('qa');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/course', function () {
    return view('single_course');
})->name('single_course');

Route::get('/policies', function () {
    return view('policies');
})->name('policies');

Route::get('/joinus', function () {
    return view('joinus');
})->name('joinus');

Route::get('/opencourse', function () {
    return view('open_courses');
})->name('open_courses');

Route::get('/opencourse-1', function () {
    return view('open_courses_1');
})->name('open_courses_1');

Route::get('/opencourse-2', function () {
    return view('open_courses_2');
})->name('open_courses_2');

Route::get('/opencourse-3', function () {
    return view('open_courses_3');
})->name('open_courses_3');

Route::get('/opencourse-4', function () {
    return view('open_courses_4');
})->name('open_courses_4');

Route::get('/how-to-take-courses', function () {
    return view('howtotakecourses');
})->name('howtotakecourses');


Route::get('/test', function () {
    return view('test');
});
