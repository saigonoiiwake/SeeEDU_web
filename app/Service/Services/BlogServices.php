<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 2018/12/27
 * Time: 4:35 AM
 */
namespace App\Service\Services;
use App\Repository\Repositories\BlogRepository;

class BlogServices {
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getSinglePost() {

    }
}