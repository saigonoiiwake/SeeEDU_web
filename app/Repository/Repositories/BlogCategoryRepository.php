<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2018/12/27
 * Time: 4:48 AM
 */
namespace App\Repository\Repositories;

use App\BlogCategory;

class BlogCategoryRepository
{
    protected $model;

    public function __construct(BlogCategory $blogCategory)
    {
        $this->model = $blogCategory;
    }

    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    public function takeBlogs($rows)
    {
        return $this->model->take($rows)->get();
    }
}