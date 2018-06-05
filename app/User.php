<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Validation\ValidationException;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * generate 10 digit ID
     * 
     * @return int
     */
    public static function generateId()
    {
        return (int)mt_rand(100000000, 999999999);
    }

    /**
     * generate 10 digit no duplicated ID
     *
     * @param int $retry
     * @return int
     * @throws
     */
    public static function generateIdSafe($retry = 15)
    {
        if ($retry <= 0) {
            // TODO: find the proper exception when ID can't be generate
            throw new ModelNotFoundException();
        }

        $id = self::generateId();

        try {
            self::query()
                ->where('id', $id)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $id;
        }

        // "[DuplicationUserId] {$id}"

        return self::generateIdSafe($retry - 1);
    }
}
