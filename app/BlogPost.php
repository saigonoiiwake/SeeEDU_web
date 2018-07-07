<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Support\Facades\Validator;

class BlogPost extends Model
{
    use softDeletes;

    protected $table = 'blog_post';

    // Disable auto increment `id` field
    public $incrementing = false;

    protected $fillable = [
      'id', 'title', 'content', 'blog_category_id', 'featured', 'slug', 'id'
    ];

    protected $dates = ['delete_at'];

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    public function category()
    {
        return $this->belongsTo('App\BlogCategory');
    }

    public function tags()
    {
        return $this->belongsToMany('App\BlogTag');
    }

    public static function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public static function newBlogPost(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'id'       => self::generateIdSafe(),
            'name'     => $param['name'],
            'email'    => $param['email'],
            'password' => bcrypt($param['password']),
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
