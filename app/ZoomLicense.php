<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// TODO
class ZoomLicense extends Model
{
    protected $table = 'zoom_license';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'license',
    ];
}
