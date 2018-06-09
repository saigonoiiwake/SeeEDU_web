<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity', function (Blueprint $table) {
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('role_id');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->primary(['course_id', 'user_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identity');
    }
}
