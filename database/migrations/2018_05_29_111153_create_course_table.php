<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->unsignedInteger('id')->comment('course id');
            $table->string('title');  // max 58 chinese
            // class status: submitted, reviewing, success, rejected...
            $table->string('status')->comment('status for the class');
            $table->unsignedInteger('course_category_id');
            $table->unsignedInteger('enroll_num')->default(0);
            $table->unsignedInteger('min_num');
            $table->unsignedInteger('max_num');
            $table->unsignedInteger('currency_id');
            $table->float('price');
            $table->float('early_bird_price')->nullable();
            $table->unsignedInteger('early_bird_num')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->json('data')->nullable()->comment('metadata');
            $table->timestamps();
            $table->primary('id');
            $table->index(['id', 'updated_at']);
            $table->index(['course_category_id']);
            $table->index(['title']);
            $table->index(['status']);
            $table->index(['min_num', 'enroll_num', 'max_num']);
            $table->index(['currency_id', 'price']);
            $table->index(['from_date', 'to_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
