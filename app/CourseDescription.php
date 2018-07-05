<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDescription extends Model
{
    protected $table = 'course_description';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'description',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
