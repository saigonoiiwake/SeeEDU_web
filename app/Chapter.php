<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'order', 'title', 'introduction', 'from_time', 'to_time',
        'record_link', 'new_view', 'data',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function attendanceLog()
    {
        return $this->hasMany('App\AttendanceLog', 'chapter_id', 'id');
    }

    public function attendedStudent()
    {
        return $this->belongsToMany('App\User', 'attendance_log', 'course_id', 'user_id');
    }
}
