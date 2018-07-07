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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create_course', 'CreateCourseController@index')->name('create_course');

Route::post('/create_course', 'CreateCourseController@create')->name('home');

Route::get('/web_socket', function () {
    return view('web_socket');
});

Route::get('/echo', 'EchoController@create');

Route::get('/messages', function () {
    return view('messages');
});