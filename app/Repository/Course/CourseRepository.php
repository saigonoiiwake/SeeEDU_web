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

    public function getCourseById($id) {
        return $this->model->where('id', $id)->first();
    }

    public function updateCourseById($id, $update) {
        $this->model->where('id', $id)->update($update);
    }

    public function newCourseTake($count)
    {
        return $this->model->where('status', 'open')
            ->whereDate('from_date', '>', date('Y-m-d'))
            ->get()
            ->sortByDesc("enroll_num")
            ->take($count);
    }

    public function oldCourseTake($count)
    {
        return $this->model->where('status', 'open')
            ->whereDate('from_date', '<=', date('Y-m-d'))
            ->get()
            ->sortByDesc("from_date")
            ->take($count);
    }
}