<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'permission_ids',
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'identity', 'user_id', 'role_id');
    }
}
