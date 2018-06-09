<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewChapter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_chapter', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('chapter_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('rate');
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->index(['course_id', 'chapter_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_chapter');
    }
}
