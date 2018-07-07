<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    protected $fillable = [
      'user_id', 'avatar', 'facebook', 'youtube', 'about',
      'phone_number', 'birthday', 'education', 'experience'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
