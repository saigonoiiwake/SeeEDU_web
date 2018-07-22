<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

// TODO
class ZoomLicense extends Model
{
    protected $table = 'zoom_license';

    protected $fillable = ['license'];

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'license' => 'required',
        ]);
    }

    public static function newLicense(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'license' => $param['license'],
        ]);
    }
}
