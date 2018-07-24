<?php

namespace App;

use App\Service\ParameterService;
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
        'from_date', 'to_date', 'featured', 'video', 'description', 'chapter', 'data',
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
            'title' => 'required',
        ]);
    }

    public static function newCourseDraft(array $params)
    {
        self::validator($params)->validate();

        return parent::create([
            'user_id'            => auth()->id(),
            'title'              => $params['title'],
            'course_category_id' => ParameterService::get($params, 'course_category_id', ''),
            'min_num'            => ParameterService::get($params, 'min_num', 0),
            'max_num'            => ParameterService::get($params, 'max_num', 0),
            'currency_id'        => ParameterService::get($params, 'currency_id', 0),
            'price'              => ParameterService::get($params, 'price', 0),
            'early_bird_price'   => ParameterService::get($params, 'early_bird_price', 0),
            'early_bird_num'     => ParameterService::get($params, 'early_bird_num', 0),
            'from_date'          => ParameterService::get($params, 'from_date', ''),
            'to_date'            => ParameterService::get($params, 'to_date', ''),
            'featured'           => ParameterService::get($params, 'featured', ''),
            'video'              => ParameterService::get($params, 'video', ''),
            'description'        => ParameterService::get($params, 'description', ''),
            'chapter'            => json_encode(ParameterService::get($params, 'chapter', '')),
            'data'               => json_encode(ParameterService::get($params, 'data', '')),
        ]);
    }
}
