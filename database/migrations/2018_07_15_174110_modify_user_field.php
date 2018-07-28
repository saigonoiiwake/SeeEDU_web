<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ModifyUserField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            DB::statement('ALTER TABLE `user` MODIFY `name` VARCHAR(255) NULL;');
            DB::statement('ALTER TABLE `user` MODIFY `nick_name` VARCHAR(255) NOT NULL;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            DB::statement('ALTER TABLE `user` MODIFY `name` VARCHAR(255) NOT NULL;');
            DB::statement('ALTER TABLE `user` MODIFY `nick_name` VARCHAR(255) NULL;');
        });
    }
}
