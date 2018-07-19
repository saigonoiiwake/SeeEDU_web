<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDraftCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_draft', function (Blueprint $table) {
            $table->text('featured')->after('to_date');
            $table->text('video')->after('featured');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_draft', function (Blueprint $table) {
            $table->dropColumn('featured');
            $table->dropColumn('video');
        });
    }
}
