<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

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
        return $this->belongsTo('App\Forum', 'forum_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'forum_id' => 'require',
            'user_id'   => 'require',
            'content'   => 'require',
        ]);
    }

    public static function newReply(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'forum_id' => $param['forum_id'],
            'user_id'  => $param['user_id'],
            'content'  => $param['content'],
        ]);
    }
}
