<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany('App/CourseReply');
    }

    public function user()
    {
        return $this->hasOne('App/User', 'id', 'user_id');
    }
}
