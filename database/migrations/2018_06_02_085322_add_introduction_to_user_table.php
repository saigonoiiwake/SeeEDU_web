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
            $table->text('intrduction')->after('email')->nullable();
            $table->json('experience')->after('intrduction')->nullable();
            $table->json('education')->after('experience')->nullable();
            $table->json('data')->after('education')->nullable();
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
            $table->dropColumn('intrduction');
            $table->dropColumn('experience');
            $table->dropColumn('education');
        });
    }
}
