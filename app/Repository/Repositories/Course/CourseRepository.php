<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2019-01-01
 * Time: 09:59
 */
namespace App\Repository\Repositories\Course;
use App\Course;

class CourseRepository {
    protected $model;

    public function __construct(Course $course)
    {
        $this->model = $course;
    }

    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    public function getCourse($query)
    {
        return $this->model->where($query)->get();
    }

    public function newCourse($compare, $sortBy)
    {
        return $this->model->whereDate('from_date', $compare, date('Y-m-d'))->get()->sortBy($sortBy);
    }

    public function whereNewCourse($query, $compare)
    {
        return $this->model->where($query)->whereDate('from_date', $compare, date('Y-m-d'))->get()->sortBy('from_date');
    }

    public function whereOldCourse($query, $compare)
    {
        return $this->model->where($query)->whereDate('from_date', $compare, date('Y-m-d'))->get()->sortBy('from_date');
    }

    public function newCourseTake($query, $compare, $sortBy, $count)
    {
        return $this->model->where($query)
            ->whereDate('from_date', $compare, date('Y-m-d'))
            ->get()
            ->sortByDesc($sortBy)
            ->take($count);
    }

    public function oldCourseTake($query, $compare, $sortBy, $count)
    {
        return $this->model->where($query)
            ->whereDate('from_date', $compare, date('Y-m-d'))
            ->get()
            ->sortByDesc($sortBy)
            ->take($count);
    }

    public function oldCourse($compare, $sortBy)
    {
        return $this->model->whereDate('from_date', $compare, date('Y-m-d'))->get()->sortByDesc($sortBy);
    }

    public function courseUpdateById($id, $update)
    {
        $this->model->where('id', '=', $id)->update($update);
    }

}