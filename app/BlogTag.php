<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $fillable = ['tag'];

    public function posts()
    {
        return $this->belongsToMany('App\BlogPost');
    }
}
