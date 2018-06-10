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
        return $this->belongsTo('App\Course');
    }

    public function chapter()
    {
        return $this->belongsTo('App\Chapter', 'id', 'chapter_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
