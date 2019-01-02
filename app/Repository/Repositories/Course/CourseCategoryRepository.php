<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2019-01-01
 * Time: 10:05
 */
namespace App\Repository\Repositories\Course;

use App\CourseCategory;

class CourseCategoryRepository {
    protected $model;

    public function __construct(CourseCategory $courseCategory)
    {
        $this->model = $courseCategory;
    }

    public function findMany($ids)
    {
        return $this->model->findMany($ids);
    }

    public function getCateGorys($query)
    {
        return $this->model->where($query)->get();
    }

    public function cateGorySkipTake($skip, $take)
    {
        return $this->model->skip($skip)->take($take)->get();
    }

}