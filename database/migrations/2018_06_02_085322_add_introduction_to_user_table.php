<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIntroductionToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->enum('status', ['alive', 'dead'])->after('email')->default('alive');
            $table->text('photo_url')->after('status')->nullable();
            $table->string('phone_number')->after('photo_url')->nullable();
            $table->string('birthday')->after('phone_number')->nullable();
            $table->text('introduction')->after('birthday')->nullable();
            $table->json('education')->after('introduction')->nullable();
            $table->json('experience')->after('education')->nullable();
            $table->json('data')->after('experience')->nullable();
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
            $table->dropColumn('status');
            $table->dropColumn('photo_url');
            $table->dropColumn('phone_number');
            $table->dropColumn('birthday');
            $table->dropColumn('introduction');
            $table->dropColumn('experience');
            $table->dropColumn('education');
            $table->dropColumn('data');
        });
    }
}
