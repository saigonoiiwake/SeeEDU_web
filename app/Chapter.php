<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Chapter extends Model
{
    protected $table = 'chapter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'order', 'title', 'description', 'from_time', 'to_time',
        'record_link', 'new_view', 'data',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

    public function attendanceLog()
    {
        return $this->hasMany('App\AttendanceLog', 'chapter_id', 'id');
    }

    public function attendedStudent()
    {
        return $this->belongsToMany('App\User', 'attendance_log', 'course_id', 'user_id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'course_id'   => 'required',
            'order'       => 'required',
            'title'       => 'required',
            'description' => 'required',
            'from_time'   => 'required',
            'to_time'     => 'required',
            'data'        => 'required',
        ]);
    }

    public static function newChapter(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id'    => $param['course_id'],
            'order'        => $param['order'],
            'title'        => $param['title'],
            'description'  => $param['description'],
            'from_time'    => $param['from_time'],
            'to_time'      => $param['to_time'],
            'data'         => $param['data'],
        ]);
    }

    /**
     * generate chapter order
     *
     * @param int $course
     * @return int
     * @throws
     */
    public static function generateOrder($course)
    {
        $orders = self::query()
            ->where('course_id', '=', $course)
            ->orderBy('order', 'desc')
            ->get();

        if ( $orders->count() === 0 ) {
            return 1;
        }

        return $orders[0]->order + 1;
    }
}
