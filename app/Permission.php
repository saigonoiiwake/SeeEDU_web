<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Permission extends Model
{
    protected $table = 'permission';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'name' => 'required',
        ]);
    }

    public static function newReply(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'name' => $param['name'],
        ]);
    }
}
