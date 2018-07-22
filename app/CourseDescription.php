<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class CourseDescription extends Model
{
    protected $table = 'course_description';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'description',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'course_id'   => 'required',
            'description' => 'required',
        ]);
    }

    public static function newCourseDescription(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id'   => $param['course_id'],
            'description' => $param['description'],
        ]);
    }
}
