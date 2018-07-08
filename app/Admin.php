<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Admin extends Model
{
    protected $table = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'active',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /**
     *  activate the admin permission
     */
    public function activate()
    {
        $this->setActive(true);
        $this->save();
    }

    /**
     * inactivate the admin permission
     */
    public function inactivate()
    {
        $this->setActive(false);
        $this->save();
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'user_id' => 'required',
        ]);
    }

    public static function newAdmin(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'user_id' => $param['user_id'],
        ]);
    }
}
