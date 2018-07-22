<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

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

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'name'          => 'required',
            'level'         => 'required',
            'parent_id'     => 'required',
            'display_order' => 'required',
        ]);
    }

    public static function newCourseCategory(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'name'          => $param['name'],
            'level'         => $param['level'],
            'parent_id'     => $param['parent_id'],
            'display_order' => $param['display_order'],
        ]);
    }
}
