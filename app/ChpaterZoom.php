<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

// TODO
class ChpaterZoom extends Model
{
    protected $table = 'chapter_zoom';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'id', 'zoom_id', 'active'
    ];

    // chpater
    // zoom
}
