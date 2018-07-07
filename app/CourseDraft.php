<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class CourseDraft extends Model
{
    protected $table = 'course_draft';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'course_category_id', 'min_num', 'max_num',
        'currency_id', 'price', 'early_bird_price', 'early_bird_name',
        'start_date', 'end_date', 'description', 'chapter', 'data',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }

    public static function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public static function newCourseDraft(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
//            'id'       => self::generateIdSafe(),
//            'name'     => $param['name'],
//            'email'    => $param['email'],
//            'password' => bcrypt($param['password']),
        ]);
    }
}
