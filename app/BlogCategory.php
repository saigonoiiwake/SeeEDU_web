<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_category';

    public function posts()
    {
        return $this->hasMany('App\BlogPost');
    }
}
