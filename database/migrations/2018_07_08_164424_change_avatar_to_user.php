<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAvatarToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });

        Schema::table('user', function (Blueprint $table) {
            $table->string('avatar')->after('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile', function (Blueprint $table) {
            $table->string('avatar')->after('user_id')->nullable();
        });

        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }
}
