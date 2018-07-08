<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class ReviewStudent extends Model
{
    protected $table = 'review_student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'user_id', 'rate', 'detail', 'comment'
    ];

    public function student()
    {
        return $this->belongsTo('App\User', 'student_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'student_id' => 'require',
            'rate'       => 'require',
            'detail'     => 'require',
            'comment'    => 'require',
        ]);
    }

    public static function newReview(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'student_id' => $param['student_id'],
            'user_id'   => auth()->id(),
            'rate'      => $param['rate'],
            'detail'    => $param['detail'],
            'comment'   => $param['comment'],
        ]);
    }
}
