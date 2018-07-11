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
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/qa', function () {
    return view('qa');
})->name('qa');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/test', function () {
    return view('test');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
