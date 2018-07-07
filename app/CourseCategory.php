<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $table = 'course_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'level', 'parent_id', 'display_order',
    ];

    public function course()
    {
        return $this->hasMany('App\Course', 'course_category_id', 'id');
    }
}
