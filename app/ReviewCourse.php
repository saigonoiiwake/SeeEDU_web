<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class ReviewCourse extends Model
{
    protected $table = 'review_course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'user_id', 'rate', 'detail', 'comment'
    ];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'course_id' => 'require',
            'rate'      => 'require',
            'detail'    => 'require',
            'comment'   => 'require',
        ]);
    }

    public static function newReview(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id' => $param['course_id'],
            'user_id'   => auth()->id(),
            'rate'      => $param['rate'],
            'detail'    => $param['detail'],
            'comment'   => $param['comment'],
        ]);
    }
}
