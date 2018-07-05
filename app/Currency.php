<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function course()
    {
        return $this->hasMany('App\Course', 'currency_id', 'id');
    }

    public function courseDraft()
    {
        return $this->hasMany('App\CourseDraft', 'currency_id', 'id');
    }
}
