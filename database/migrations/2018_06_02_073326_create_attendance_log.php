<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lecture_id');
            $table->unsignedInteger('chapter_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->index(['lecture_id', 'chapter_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_log');
    }
}
