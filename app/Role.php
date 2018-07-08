<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

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

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'name'            => 'require',
            'permission_ids'  => 'require',
        ]);
    }

    public static function newRole(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'name'           => $param['name'],
            'permission_ids' => $param['permission_ids'],
        ]);
    }
}
