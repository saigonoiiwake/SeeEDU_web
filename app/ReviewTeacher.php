<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewTeacher extends Model
{
    protected $table = 'review_teacher';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'teacher_id', 'user_id', 'rate', 'comment'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\User');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
