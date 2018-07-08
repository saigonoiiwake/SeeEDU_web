<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class BlogTag extends Model
{
    protected $table = 'blog_tag';

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany('App\BlogPost', 'blog_post_tag', 'tag_id', 'post_id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'name' => 'required',
        ]);
    }

    public static function newBlogTag(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'name' => $param['name'],
        ]);
    }
}
