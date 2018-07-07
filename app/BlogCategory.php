<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public function posts()
    {
        return $this->hasMany('App\BlogPost');
    }
}
