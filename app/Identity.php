<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    protected $table = 'identity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'user_id', 'role_id', 'active'
    ];

    public function course()
    {
        // ?
        return $this->belongsTo('App/Course', 'id', 'course_id');
    }

    public function user()
    {
        return $this->hasOne('App/User', 'id', 'user_id');
    }
}
