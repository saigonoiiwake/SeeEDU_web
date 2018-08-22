<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BlogPost extends Model
{
    use SoftDeletes;

    protected $table = 'blog_post';

    // Disable auto increment `id` field
    public $incrementing = false;

    protected $fillable = [
        'id', 'title',  'slug', 'content', 'blog_category_id', 'featured'
    ];

    protected $dates = ['delete_at'];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    public function category()
    {
        return $this->belongsTo('App\BlogCategory', 'blog_category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\BlogTag', 'blog_post_tag', 'post_id', 'tag_id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'title'            => 'required',
            'slug'             => 'required',
            'content'          => 'required',
            'blog_category_id' => 'required',
            'featured'         => 'required',
        ]);
    }

    public static function newBlogPost(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'id'               => self::generateIdSafe(),
            'title'            => $param['title'],
            'slug'             => $param['slug'],
            'content'          => $param['content'],
            'blog_category_id' => $param['blog_category_id'],
            'featured'         => $param['featured'],
        ]);
    }

    /**
    * generate 10 digit ID
    *
    * @return int
    */
    public static function generateId()
    {
        return (int)mt_rand(100000000, 999999999);
    }

    /**
    * generate 10 digit no duplicated ID
    *
    * @param int $retry
    * @return int
    * @throws
    */
    public static function generateIdSafe($retry = 15)
    {
        if ($retry <= 0) {
            // TODO: find the proper exception when ID can't be generate
            throw new ModelNotFoundException();
        }

        $id = self::generateId();

        try {
            self::query()
              ->where('id', '=', $id)
              ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $id;
        }

        // "[DuplicationCourseId] {$id}"
        return self::generateIdSafe($retry - 1);
    }
}
