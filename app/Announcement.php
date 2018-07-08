<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Announcement extends Model
{
    protected $table = 'announcement';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'link', 'priority', 'discard',
    ];

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'title'    => 'required',
            'content'  => 'required',
            'link'     => 'required',
            'priority' => 'required',
        ]);
    }

    public static function newAnnouncement(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'title'    => $param['title'],
            'content'  => $param['content'],
            'link'     => $param['link'],
            'priority' => $param['priority'],
        ]);
    }
}
