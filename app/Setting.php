<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Setting extends Model
{
    protected $table = 'setting';

    protected $fillable = [
        'site_name', 'address', 'contact_number', 'contact_email'
    ];

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'site_name'      => 'required',
            'address'        => 'required',
            'contact_number' => 'required',
            'contact_email'  => 'required',
        ]);
    }

    public static function newRole(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'site_name'      => $param['site_name'],
            'address'        => $param['address'],
            'contact_number' => $param['contact_number'],
            'contact_email'  => $param['contact_email'],
        ]);
    }
}
