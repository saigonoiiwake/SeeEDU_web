<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'status', 'photo_url', 'phone_number', 'birthday',
        'introduction', 'education', 'experience', 'data'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin()
    {
        return $this->hasOne('App\Admin', 'user_id', 'id');
    }

    public function attendanceLog()
    {
        return $this->hasMany('App\AttendanceLog', 'user_id', 'id');
    }

    public function attendedCourse()
    {
        return $this->belongsToMany('App\Course', 'attendance_log', 'user_id', 'course_id');
    }

    public function attendedChapter()
    {
        return $this->belongsToMany('App\Chapter', 'attendance_log', 'user_id', 'chapter_id');
    }

    public function courseDraft()
    {
        return $this->hasMany('App\CourseDraft', 'user_id', 'id');
    }

    public function enroll()
    {
        return $this->hasMany('App\Enroll', 'user_id', 'id');
    }

    public function takeCourse()
    {
        return $this->belongsToMany('App\Course', 'enroll', 'user_id', 'course_id');
    }

    public function forum()
    {
        return $this->hasMany('App\Forum', 'user_id', 'id');
    }

    public function forumReply()
    {
        return $this->hasMany('App\ForumReply', 'user_id', 'id');
    }

    public function qa()
    {
        return $this->hasMany('App\QA', 'user_id', 'id');
    }

    public function identity()
    {
        return $this->hasMany('App\Identity', 'user_id', 'id');
    }

    public function course()
    {
        // as teacher of TA
        return $this->belongsToMany('App\Course', 'identity', 'user_id', 'course_id');
    }

    public function role()
    {
        return $this->belongsToMany('App\Role', 'identity', 'user_id', 'role_id');
    }

    public function receivePrivateMessage()
    {
        return $this->hasMany('App\PrivateMessage', 'to_user_id', 'id');
    }

    public function sendPrivateMessage()
    {
        return $this->hasMany('App\PrivateMessage', 'from_user_id', 'id');
    }

    public function reviewCourse()
    {
        return $this->hasMany('App\ReviewCourse', 'user_id', 'id');
    }

    public function reviewStudent()
    {
        return $this->hasMany('App\ReviewStudent', 'user_id', 'id');
    }

    public function receiveStudentReview()
    {
        return $this->hasMany('App\ReviewStudent', 'student_id', 'id');
    }

    public function reviewTeacher()
    {
        return $this->hasMany('App\ReviewherTeac', 'user_id', 'id');
    }

    public function receiveTeacherReview()
    {
        return $this->hasMany('App\ReviewTeacher', 'teacher_id', 'id');
    }

    public function transaction()
    {
        return $this->hasMany('App\Transaction', 'user_id', 'id');
    }

    /**
     * generate 10 digit ID
     * 
     * @return int
     */
    public static function generateId()
    {
        return (int)mt_rand(100000000, 999999999);
    }

    /**
     * generate 10 digit no duplicated ID
     *
     * @param int $retry
     * @return int
     * @throws
     */
    public static function generateIdSafe($retry = 15)
    {
        if ($retry <= 0) {
            // TODO: find the proper exception when ID can't be generate
            throw new ModelNotFoundException();
        }

        $id = self::generateId();

        try {
            self::query()
                ->where('id', '=',$id)
                ->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return $id;
        }

        // "[DuplicationUserId] {$id}"

        return self::generateIdSafe($retry - 1);
    }
}
