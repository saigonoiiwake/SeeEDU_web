<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterZoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_zoom', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('chapter_id');
            $table->unsignedInteger('zoom_id');
            $table->timestamps();
            $table->index(['chapter_id', 'zoom_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_zoom');
    }
}
