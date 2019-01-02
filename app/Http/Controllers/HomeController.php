<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('courses', Course::take(3)->where('status', 'open')->get());
    }

    public function landing()
    {
        return view('landing');
    }

    public function check()
    {
        if (\Auth::check()) {
            // 已登入
            $user = \Auth::user();

            $rtndata ['status'] = 'Success';
            $rtndata ['data'] = $user;

            return response()->json( $rtndata );
        } else {
            
            $rtndata ['status'] = 'Fail';
            $rtndata ['message'] = '尚未登入2';
            
            return response()->json( $rtndata );
        }
    }
}
