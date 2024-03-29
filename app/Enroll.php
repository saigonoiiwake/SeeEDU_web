<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
  protected $table = 'enroll';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'course_id', 'user_id'
  ];

  public function course()
   {
       return $this->hasOne('App/Course', 'id', 'course_id');
   }
   public function user()
   {
       return $this->hasOne('App/User', 'id', 'user_id');
   }
}
