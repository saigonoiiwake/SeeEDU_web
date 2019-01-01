<?php

namespace App\Http\Controllers;

use App\Repository\Repositories\Blog\BlogCategoryRepository;
use App\Repository\Repositories\Blog\BlogPostRepository;
use App\Repository\Repositories\Blog\BlogTagRepository;

class BlogController extends Controller
{
    protected $blogPostRepository;
    protected $blogCategoryRepository;
    protected $blogTagRepository;

    public function __construct(
        BlogPostRepository $blogPostRepository,
        BlogCategoryRepository $blogCategoryRepository,
        BlogTagRepository $blogTagRepository
    )
    {
        $this->blogPostRepository = $blogPostRepository;
        $this->blogTagRepository = $blogTagRepository;
        $this->blogCategoryRepository = $blogCategoryRepository;
    }

    public function index()
    {
        return view('blogs.index')
            ->with('categories', $this->blogCategoryRepository->takeBlogs(5))
            ->with('first_post', $this->blogPostRepository->nthPost(1))
            ->with('second_post', $this->blogPostRepository->nthPost(2))
            ->with('third_post', $this->blogPostRepository->nthPost(3))
            ->with('newToeic', $this->blogCategoryRepository->find(1))
            ->with('JLPT', $this->blogCategoryRepository->find(2))
            ->with('Japanese', $this->blogCategoryRepository->find(3));
    }

    public function singlePost($slug)
    {
        $postQeury['slug'] = $slug;
        $post = $this->blogPostRepository->getPost($postQeury);
        $next_id = $this->blogPostRepository->getNextPostId($post->id);
        $prev_id = $this->blogPostRepository->getPrevPostId($post->id);

        return view('blogs.single')
            ->with('post', $post)
            ->with('title', $post->title)
            ->with('categories', $this->blogCategoryRepository->takeBlogs(5))
            ->with('next', $this->blogPostRepository->find($next_id))
            ->with('prev', $this->blogPostRepository->find($prev_id))
            ->with('tags', $this->blogTagRepository->all());
    }

    public function category($id)
    {
      $category = $this->blogCategoryRepository->find($id);

      return view('blogs.category')
          ->with('category', $category)
          ->with('title', $category->name)
          ->with('categories', $this->blogCategoryRepository->takeBlogs(5))
          ->with('tags', $this->blogTagRepository->all());
    }

    public function tag($id)
    {
      $tag = $this->blogTagRepository->find($id);

      return view('blogs.tag')
          ->with('tag', $tag)
          ->with('title', $tag)
          ->with('categories', $this->blogCategoryRepository->takeBlogs(5))
          ->with('tags', $this->blogTagRepository->all());
    }

}
