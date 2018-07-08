<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class QA extends Model
{
    protected $table = 'qa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'user_id', 'question', 'is_done', 'answer', 'answer_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'course_id' => 'require',
            'question'  => 'require',
        ]);
    }

    public static function newQA(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id' => $param['course_id'],
            'user_id'   => auth()->id(),
            'question'  => $param['question'],
        ]);
    }
}
