<?php

use Illuminate\Http\Request;
use App\Course;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('courses/{course}', 'CourseController@show');
Route::get('course/{count}', 'CourseController@showNew');
Route::get('course', 'CourseController@showAll');