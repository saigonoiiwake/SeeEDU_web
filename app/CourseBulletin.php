<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Support\Facades\Validator;

class CourseBulletin extends Model
{
    use softDeletes;

    protected $table = 'course_bulletin';

    protected $fillable = [
        'course_id', 'user_id', 'bulletin_type_id', 'title', 'content',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\CourseBulletinType', 'bulletin_type_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public static function validator(array $data)
    {
        // TODO
        return Validator::make($data, [
            'course_id' => 'require',
            'type_id'   => 'require',
            'title'     => 'require',
            'content'   => 'require',
        ]);
    }

    public static function newCourseBulletin(array $param)
    {
        self::validator($param)->validate();

        return parent::create([
            'course_id' => $param['course_id'],
            'user_id'   => auth()->id(),
            'type_id'   => $param['type_id'],
            'title'     => $param['title'],
            'content'   => $param['content'],
        ]);
    }
}
