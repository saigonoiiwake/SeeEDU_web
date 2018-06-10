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
        return $this->belongsTo('App\User');
    }

    public function toUser()
    {
        return $this->belongsTo('App\User');
    }
}
