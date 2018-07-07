<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
          $table->unsignedInteger('user_id');
          $table->string('avatar')->nullable();
          $table->text('about')->nullable();
          $table->string('phone_number')->nullable();
          $table->string('birthday')->nullable();
          $table->string('facebook')->nullable();
          $table->string('youtube')->nullable();
          $table->json('education')->nullable();
          $table->json('experience')->nullable();
          $table->timestamps();
          $table->primary('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
