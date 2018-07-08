<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class AttendanceLog extends Model
{
    protected $table = 'attendance_log';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'chapter_id', 'user_id',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course', 'id', 'course_id');
    }

    public function chapter()
    {
        return $this->belongsTo('App\Chapter', 'id', 'chapter_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'course_id'   => 'required',
            'chapter_id'  => 'required',
            'user_id'     => 'required',
        ]);
    }

    public static function newAttendaceLog(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id'   => $param['course_id'],
            'chapter_id'  => $param['chapter_id'],
            'user_id'     => auth()->id(),
        ]);
    }
}
