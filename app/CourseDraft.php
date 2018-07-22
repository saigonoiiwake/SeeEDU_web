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
        'from_date', 'to_date', 'description', 'chapter', 'data',
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
        // TODO
        return Validator::make($data, [
            'title'              => 'required',
            'course_category_id' => 'required',
            'min_num'            => 'required',
            'max_num'            => 'required',
            'currency_id'        => 'required',
            'price'              => 'required',
            'early_bird_price'   => 'required',
            'early_bird_name'    => 'required',
            'from_date'          => 'required',
            'to_date'            => 'required',
            'chapter'            => 'required',
            'data'               => 'required',
        ]);
    }

    public static function newCourseDraft(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'user_id'            => auth()->id(),
            'title'              => $param['title'],
            'course_category_id' => $param['course_category_id'],
            'min_num'            => $param['min_num'],
            'max_num'            => $param['max_num'],
            'currency_id'        => $param['currency_id'],
            'price'              => $param['price'],
            'early_bird_price'   => $param['early_bird_price'],
            'early_bird_name'    => $param['early_bird_price'],
            'from_date'          => $param['from_date'],
            'to_date'            => $param['to_date'],
            'chapter'            => $param['chapter'],
            'data'               => $param['data'],
        ]);
    }
}
