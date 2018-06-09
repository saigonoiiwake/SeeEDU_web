<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateMessage extends Model
{
    protected $table = 'private_message';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_user_id', 'to_user_id', 'message', 'status'
    ];

    public function fromUser()
    {
        return $this->hasOne('App/User', 'id', 'from_user_id');
    }

    public function toUser()
    {
        return $this->hasOne('App/User', 'id', 'to_user_id');
    }
}
