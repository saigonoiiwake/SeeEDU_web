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
        return $this->belongsTo('App/Course');
    }

    public function courseDraft()
    {
        return $this->belongsTo('App/CourseDraft');
    }
}
