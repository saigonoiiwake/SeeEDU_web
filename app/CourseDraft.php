<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDraft extends Model
{
    protected $table = 'course_draft';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'category_id', 'min_num', 'max_num',
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
}
