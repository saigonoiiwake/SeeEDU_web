<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Profile extends Model
{
    protected $table = 'profile';

    protected $fillable = [
      'user_id', 'facebook', 'youtube', 'about',
      'phone_number', 'birthday', 'education', 'experience'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'user_id'      => 'required',
            'facebook'     => 'required',
            'youtube'      => 'required',
            'about'        => 'required',
            'phone_number' => 'required',
            'birthday'     => 'required',
            'education'    => 'required',
            'experience'   => 'required',
        ]);
    }

    public static function newProfile(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'user_id'      => auth()->id(),
            'facebook'     => $param['facebook'],
            'youtube'      => $param['youtube'],
            'about'        => $param['about'],
            'phone_number' => $param['phone_number'],
            'birthday'     => $param['birthday'],
            'education'    => $param['education'],
            'experience'   => $param['experience'],
        ]);
    }
}
