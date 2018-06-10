<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'active',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     *  activate the admin permission
     */
    public function activate()
    {
        $this->setActive(true);
        $this->save();
    }

    /**
     * inactivate the admin permission
     */
    public function inactivate()
    {
        $this->setActive(false);
        $this->save();
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}
