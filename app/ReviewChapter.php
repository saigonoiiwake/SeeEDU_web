<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewChapter extends Model
{
    protected $table = 'review_chapter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'chapter_id', 'user_id', 'rate', 'comment'
    ];

    public function course()
    {
        return $this->hasOne('App/Course', 'id', 'course_id');
    }

    public function chapter()
    {
        return $this->hasOne('App/Chapter', 'id', 'chapter_id');
    }

    public function user()
    {
        return $this->hasOne('App/User', 'id', 'user_id');
    }
}
