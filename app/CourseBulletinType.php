<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseBulletinType extends Model
{
    protected $table = 'course_bulletin_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'priority'];

    public function bulletin()
    {
        return $this->hasMany('App\CourseBulletin', 'type_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'name'     => 'required',
            'priority' => 'required',
        ]);
    }

    public static function newCourseBulletinType(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'name'       => $param['name'],
            'priority'   => $param['priority'],
        ]);
    }
}
