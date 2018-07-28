<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class ReviewTeacher extends Model
{
    protected $table = 'review_teacher';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'teacher_id', 'user_id', 'rate', 'detail', 'comment'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\User', 'teacher_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'teacher_id' => 'required',
            'rate'       => 'required',
            'detail'     => 'required',
            'comment'    => 'required',
        ]);
    }

    public static function newReview(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'teacher_id' => $param['teacher_id'],
            'user_id'    => auth()->id(),
            'rate'       => $param['rate'],
            'detail'     => $param['detail'],
            'comment'    => $param['comment'],
        ]);
    }
}
