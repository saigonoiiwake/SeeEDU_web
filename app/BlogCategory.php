<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class BlogCategory extends Model
{
    protected $table = 'blog_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name' ];

    public function posts()
    {
        return $this->hasMany('App\BlogPost', 'blog_category_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'name' => 'required',
        ]);
    }

    public static function newBlogCategory(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'name' => $param['name'],
        ]);
    }
}
