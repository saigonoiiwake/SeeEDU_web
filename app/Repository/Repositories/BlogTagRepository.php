<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2018/12/27
 * Time: 4:48 AM
 */
namespace App\Repository\Repositories;

use App\BlogTag;

class BlogTagRepository
{
    protected $model;

    public function __construct(BlogTag $blogTagRepository)
    {
        $this->model = $blogTagRepository;
    }

    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    public function all()
    {
        return $this->model->all();
    }
}