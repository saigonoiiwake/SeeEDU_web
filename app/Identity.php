<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Identity extends Model
{
    protected $table = 'identity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'user_id', 'role_id', 'active'
    ];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    /**
     *  activate the identity
     */
    public function activate()
    {
        $this->setActive(true);
        $this->save();
    }

    /**
     * inactivate the identity
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
            'course_id' => 'require',
            'user_id'   => 'require',
            'content'   => 'require',
        ]);
    }

    public static function newIdentity(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id' => $param['course_id'],
            'user_id'   => $param['user_id'],
            'role_id'   => $param['role_id'],
        ]);
    }
}
