<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewStudent extends Model
{
    protected $table = 'review_student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'user_id', 'rate', 'comment',
    ];

    public function student()
    {
        return $this->hasOne('App/User', 'id', 'student_id');
    }

    public function user()
    {
        return $this->hasOne('App/User', 'id', 'user_id');
    }
}
