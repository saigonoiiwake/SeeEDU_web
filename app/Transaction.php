<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Transaction extends Model
{
    protected $table = 'transaction';
    public const SUCCESS = 'SUCCESS';
    public const PENDING = 'PENDING';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'course_id', 'purchase_price', 'channel', 'coupon_code', 'transaction_status', 'info'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    // TODO!!
}
