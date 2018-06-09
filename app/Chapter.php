<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'id', 'title', 'introduction', 'from_time', 'to_time',
        'record_link', 'new_view', 'data',
    ];

    public function course()
    {
        return $this->hasOne('App/Course', 'id', 'course_id');
    }

    public function review()
    {
        return $this->hasMany('App/ReviewChapter', 'chapter_id', 'id');
    }
}
