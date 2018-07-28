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
        'course_id', 'order', 'status', 'title', 'description', 'from_time', 'to_time',
        'record_link', 'new_view', 'data',
    ];

    const STATUS_WAITING = 'waiting';
    const STATUS_CANCELED = 'canceled';
    const STATUS_CLOSED = 'closed';

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
        return Validator::make($data, [
            'course_id'   => 'required',
            'title'       => 'required',
            'description' => 'required',
            'from_time'   => 'required',
            'to_time'     => 'required',
        ]);
    }

    public static function newChapter(array $params)
    {
        self::validator($params)->validate();

        return parent::create([
            'course_id'    => $params['course_id'],
            'order'        => self::generateOrder($params['course_id']),
            'status'       => self::STATUS_WAITING,
            'title'        => $params['title'],
            'description'  => $params['description'],
            'from_time'    => $params['from_time'],
            'to_time'      => $params['to_time'],
            'data'         => json_encode($params['data']),
        ]);
    }

    /**
     * generate chapter order
     *
     * @param int $course_id
     * @return int
     * @throws
     */
    public static function generateOrder($course_id)
    {
        $orders = self::query()
            ->where('course_id', '=', $course_id)
            ->orderBy('order', 'desc')
            ->get();

        if ( $orders->count() === 0 ) {
            return 1;
        }

        return $orders[0]->order + 1;
    }
}
