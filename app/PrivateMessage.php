<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

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
        return $this->belongsTo('App\User', 'from_user_id', 'id');
    }

    public function toUser()
    {
        return $this->belongsTo('App\User', 'to_user_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'from_user_id' => 'required',
            'to_user_id'   => 'required',
            'message'      => 'required',
        ]);
    }

    public static function newMessage(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'from_user_id' => auth()->id(),
            'to_user_id'   => $param['to_user_id'],
            'message'      => $param['message'],
        ]);
    }
}
