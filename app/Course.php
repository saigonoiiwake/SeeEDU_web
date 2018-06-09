<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'status', 'category_id', 'enroll_num', 'min_num', 'max_num',
        'currency_id', 'price', 'early_bird_price', 'early_bird_name', 'start_date', 'end_date',
        'data',
    ];

    public function attendanceLog()
    {
        return $this->belongsTo('App/AttendanceLog');
    }

    public function chapter()
    {
        return $this->belongsTo('App/Chapter');
    }

    public function category()
    {
        return $this->hasOne('App/CourseCategory', 'id', 'category_id');
    }

    public function currency()
    {
        return $this->hasOne('App/Currency', 'id', 'currency_id');
    }

    public function description()
    {
        return $this->belongsTo('App/CourseDescription');
    }

    public function enroll()
    {
        return $this->belongsTo('App/Enroll');
    }

    public function identity()
    {
        return; //$this->hasMany('App/Identity', '')
    }
}
