<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Currency extends Model
{
    protected $table = 'currency';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'symbol'];

    public function course()
    {
        return $this->hasMany('App\Course', 'currency_id', 'id');
    }

    public function courseDraft()
    {
        return $this->hasMany('App\CourseDraft', 'currency_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'name'          => 'require',
            'symbol'        => 'require',
        ]);
    }

    public static function newCurrency(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'name'     => $param['name'],
            'symbol'   => $param['symbol'],
        ]);
    }
}
