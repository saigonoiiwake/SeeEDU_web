<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2019-01-04
 * Time: 02:15
 */
namespace App\Repository\Course;

use App\Course;

class CourseRepository {
    protected $model;

    public function __construct(Course $course)
    {
        $this->model = $course;
    }

    public function newCourseTake($count)
    {
        return $this->model->where('status', 'open')
            ->whereDate('from_date', '>', date('Y-m-d'))
            ->get()
            ->sortByDesc("enroll_num")
            ->take($count);
    }

    public function oldCourseTake()
    {
        return $this->model->where('status', 'open')
            ->whereDate('from_date', '<=', date('Y-m-d'))
            ->get()
            ->sortByDesc("from_date")
            ->take($count - count($new_courses));
    }
}