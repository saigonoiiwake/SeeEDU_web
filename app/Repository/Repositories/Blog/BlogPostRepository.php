<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2018/12/27
 * Time: 4:14 AM
 */
namespace App\Repository\Repositories\Blog;
use App\BlogPost;

class BlogPostRepository {
    protected $model;

    public function __construct(BlogPost $blogPost)
    {
        $this->model = $blogPost;
    }

    public function getPost($query)
    {
        return $this->model->where($query)->first();
    }

    public function getNextPostId($id)
    {
        return $this->model->where('id', '>', $id)->min('id');
    }

    public function getPrevPostId($id)
    {
        return $this->model->where('id', '<', $id)->max('id');
    }

    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    public function nthPost($nth)
    {
        $nth = $nth - 1;
        return $this->model->orderBy('created_at', 'desc')->skip($nth)->take(1)->get()->first();
    }
}

