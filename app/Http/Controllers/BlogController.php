<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;
use App\BlogPost;
use App\BlogTag;
use App\Repository\Repositories\BlogRepository;

class BlogController extends Controller
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        return view('blogs.index')
            ->with('categories', BlogCategory::take(5)->get())
            ->with('first_post', BlogPost::orderBy('created_at', 'desc')->first())
            ->with('second_post',BlogPost::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', BlogPost::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('newToeic', BlogCategory::find(1))
            ->with('JLPT', BlogCategory::find(2))
            ->with('Japanese', BlogCategory::find(3));
    }

    public function singlePost($slug)
    {
        $postQeury['slug'] = $slug;
        $post = $this->blogRepository->getPost($postQeury);
        $next_id = $this->blogRepository->getNextPostId($post->id);
        $prev_id = $this->blogRepository->getPrevPostId($post->id);

        return view('blogs.single')
            ->with('post', $post)
            ->with('title', $post->title)
            ->with('categories', BlogCategory::take(5)->get())
            ->with('next', $this->blogRepository->find($next_id))
            ->with('prev', $this->blogRepository->find($prev_id))
            ->with('tags', BlogTag::all());
    }

      public function category($id)
      {
          $category = BlogCategory::find($id);

          return view('blogs.category')->with('category', $category)
              ->with('title', $category->name)
              ->with('categories', BlogCategory::take(5)->get())
              ->with('tags', BlogTag::all());
      }

      public function tag($id)
      {
          $tag = BlogTag::find($id);

          return view('blogs.tag')
              ->with('tag', $tag)
              ->with('title', $tag)
              ->with('categories', BlogCategory::take(5)->get())
              ->with('tags', BlogTag::all());
      }

}
