<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'status', 'category_id', 'enroll_num', 'min_num', 'max_num',
        'currency_id', 'price', 'early_bird_price', 'early_bird_name', 'start_date', 'end_date',
        'data',
    ];

    public function attendanceLog()
    {
        return $this->hasMany('App\AttendanceLog', 'course_id', 'id');
    }

    public function attendedStudent()
    {
        return $this->belongsToMany('App\User', 'attendance_log', 'course_id', 'user_id');
    }

    public function chapter()
    {
        return $this->hasMany('App\Chapter', 'course_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\CourseCategory');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }

    public function description()
    {
        return $this->hasOne('App\CourseDescription', 'course_id', 'id');
    }

    public function enroll()
    {
        return $this->belongsTo('App\Enroll');
    }

    public function student()
    {
        return $this->belongsToMany('App\User', 'enroll', 'course_id', 'user_id');
    }

    public function identity()
    {
        // one course has many identity (many teachers, many TAs)
        return $this->hasMany('App\Identity', 'course_id', 'id');
    }

    public function teacherOrTA()
    {
        return $this->belongsToMany('App\User', 'identity', 'course_id', 'user_id');
    }

    public function forum()
    {
        return $this->hasMany('App\Forum', 'course_id', 'id');
    }

    public function qa()
    {
        return $this->hasMany('App\QA', 'course_id', 'id');
    }

    public function review()
    {
        return $this->hasMany('App\ReviewCourse', 'course_id', 'id');
    }
}
