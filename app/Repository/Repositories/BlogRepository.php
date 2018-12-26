<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2018/12/27
 * Time: 4:14 AM
 */
namespace App\Repository\Repositories;
use App\BlogPost;

class BlogRepository {
    protected $blogpost;

    public function __construct(BlogPost $blogPost)
    {
        $this->blogpost = $blogPost;
    }

    public function getPost($query)
    {
        return $this->blogpost->where($query)->first();
    }

    public function getNextPostId($id)
    {
        return $this->blogpost->where('id', '>', $id)->min('id');
    }

    public function getPrevPostId($id)
    {
        return $this->blogpost->where('id', '<', $id)->max('id');
    }

    public function find($id, $columns = array('*')) {
        return $this->blogpost->find($id, $columns);
    }


}

