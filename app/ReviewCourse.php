<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo('App\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
