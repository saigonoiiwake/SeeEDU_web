<?php

namespace App;

use App\Service\ParameterService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Profile extends Model
{
    protected $table = 'profile';

    protected $primaryKey = 'user_id';

    protected $fillable = [
      'user_id', 'facebook', 'youtube', 'about',
      'phone_number', 'birthday', 'education', 'experience'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function get($user_id)
    {
        return Profile::where('user_id', $user_id)->get()->first();
    }

    public function getEducation()
    {
        if ($this->education === null){
            return [];
        }

        return json_decode($this->education, true);
    }

    public function getExperience()
    {
        if ($this->experience === null){
            return [];
        }

        return json_decode($this->experience, true);
    }

    public static function validator(array $data)
    {
        return Validator::make($data, [
            'birthday'     => 'nullable|date',
        ]);
    }

    public static function newProfile(array $params)
    {
        self::validator($params)->validate();

        return parent::create([
            'user_id'      => auth()->id(),
            'facebook'     => ParameterService::get($params, 'facebook', ''),
            'youtube'      => ParameterService::get($params, 'youtube', ''),
            'about'        => ParameterService::get($params, 'about', ''),
            'phone_number' => ParameterService::get($params, 'phone_number', ''),
            'birthday'     => ParameterService::get($params, 'birthday', ''),
            'education'    => json_encode(ParameterService::get($params, 'education', [])),
            'experience'   => json_encode(ParameterService::get($params, 'experience', [])),
        ]);
    }
}
