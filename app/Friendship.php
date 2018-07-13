<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    protected $table = 'friendship';

    protected $fillable = [
        'user_id', 'friend_id', 'active',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function friend()
    {
        return $this->belongsTo('App\User', 'friend_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'friend_id' => 'require',
        ]);
    }

    public static function newFriendship(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'user_id'   => auth()->id(),
            'friend_id' => $param['student_id'],
        ]);
    }
}
