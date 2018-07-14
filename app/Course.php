<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;

class Course extends Model
{
    protected $table = 'course';

    // Disable auto increment `id` field
    public $incrementing = false;

    protected $fillable = [
        'id', 'title', 'status', 'course_category_id', 'enroll_num', 'min_num', 'max_num', 'browse_num',
        'currency_id', 'price', 'early_bird_price', 'early_bird_name', 'from_date', 'to_date',
        'data',
    ];

    // TODO: Please define status
    const STATUS_SUBMIT = 'submit';

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
        return $this->belongsTo('App\CourseCategory', 'course_category_id', 'id');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency', 'currency_id', 'id');
    }

    public function description()
    {
        return $this->hasOne('App\CourseDescription', 'course_id', 'id');
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

    public function bulletin()
    {
        return $this->hasMany('App\CourseBulletin', 'course_id', 'id');
    }

    public function review()
    {
        return $this->hasMany('App\ReviewCourse', 'course_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'title'              => 'require',
            'course_category_id' => 'require',
            'min_num'            => 'require',
            'max_num'            => 'require',
            'currency_id'        => 'require',
            'price'              => 'require',
            'early_bird_price'   => 'require',
            'early_bird_name'    => 'require',
            'from_date'          => 'require',
            'to_date'            => 'require',
            'data'               => 'require'
        ]);
    }

    public static function newCourse(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'id'                 => self::generateIdSafe(),
            'title'              => $param['title'],
            'status'             => self::STATUS_SUBMIT,  // TODO: Please define status
            'course_category_id' => $param['course_category_id'],
            'min_num'            => $param['min_num'],
            'max_num'            => $param['max_num'],
            'currency_id'        => $param['currency_id'],
            'price'              => $param['price'],
            'early_bird_price'   => $param['early_bird_price'],
            'early_bird_name'    => $param['early_bird_price'],
            'from_date'          => $param['from_date'],
            'to_date'            => $param['to_date'],
            'data'               => $param['data']
        ]);
    }

    /**
     * generate 10 digit ID
     *
     * @return int
     */
    public static function generateId()
    {
        return (int)mt_rand(100000000, 999999999);
    }

    /**
     * generate 10 digit no duplicated ID
     *
     * @param int $retry
     * @return int
     * @throws
     */
    public static function generateIdSafe($retry = 15)
    {
        if ($retry <= 0) {
            // TODO: find the proper exception when ID can't be generate
            throw new ModelNotFoundException();
        }

        $id = self::generateId();

        try {
            self::query()
                ->where('id', '=', $id)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $id;
        }

        // "[DuplicationCourseId] {$id}"

        return self::generateIdSafe($retry - 1);
    }
}
