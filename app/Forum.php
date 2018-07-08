<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Forum extends Model
{
    protected $table = 'forum';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'user_id', 'content',
    ];

    public function reply()
    {
        return $this->hasMany('App\ForumReply', 'forum_id', 'id');
    }

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
            'user_id'   => 'require',
            'content'   => 'require',
        ]);
    }

    public static function newForum(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id' => $param['course_id'],
            'user_id'   => $param['user_id'],
            'content'   => $param['content'],
        ]);
    }
}
