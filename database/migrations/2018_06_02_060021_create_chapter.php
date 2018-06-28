<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->increments('id')->comment('chapter id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('order');
            $table->string('title');
            $table->longText('introduction');
            $table->timestamp('from_time')->nullable();
            $table->timestamp('to_time')->nullable();
            $table->text('record_link')->nullable();
            $table->unsignedInteger('num_view')->default(0);
            $table->json('data')->nullable();
            $table->timestamps();
            $table->unique(['course_id', 'order']);
            $table->index(['from_time', 'to_time']);
            $table->index(['num_view']);
            $table->index(['title']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter');
    }
}
