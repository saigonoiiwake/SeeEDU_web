<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class BlogPost extends Model
{
    protected $table = 'blog_post';

    // Disable auto increment `id` field
    public $incrementing = false;

    use softDeletes;

    protected $fillable = [
      'title', 'content', 'blog_category_id', 'featured', 'slug', 'id'
    ];

    protected $dates = ['delete_at'];


    public function getFeaturedAttribute($featured)
    {
      return asset($featured);
    }

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function tags()
    {
      return $this->belongsToMany('App\Tag');
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
