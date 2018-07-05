<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumReply extends Model
{
    protected $table = 'forum_reply';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'forum_id', 'user_id', 'content',
    ];

    public function forum()
    {
        return $this->belongsTo('App\Forum');
    }

    public function user()
    {
        return $this->belongsTo('App\User' );
    }
}
