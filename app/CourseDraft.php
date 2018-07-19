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
        // TODO
        return Validator::make($data, [
            'title'              => 'require',
            'course_category_id' => 'require',
            'min_num'            => 'require',
            'max_num'            => 'require',
            'currency_id'        => 'require',
            'price'              => 'require',
            'early_bird_price'   => 'require',
            'early_bird_name'    => 'require',
            'from_date'          => 'require',
            'to_date'            => 'require',
            'featured'           => 'require',
            'video'              => 'require',
            'description'        => 'require',
            'chapter'            => 'require',
            'data'               => 'require',
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
            'featured'           => $param['featured'],
            'video'              => $param['video'],
            'description'        => $param['description'],
            'chapter'            => $param['chapter'],
            'data'               => $param['data'],
        ]);
    }
}
