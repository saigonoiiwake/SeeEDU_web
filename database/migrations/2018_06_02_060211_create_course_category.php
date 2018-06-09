<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('level')->default(1);
            $table->unsignedInteger('parent_id')->default(0);
            $table->unsignedInteger('display_order');
            $table->timestamps();
            $table->index(['id', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_category');
    }
}
