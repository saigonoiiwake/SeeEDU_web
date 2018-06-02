<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->unsignedInteger('class_id');
            $table->unsignedInteger('id')->comment('chapter id');
            $table->longText('introduction');
            $table->timestampTz('from_time')->nullable(); ;
            $table->timestampTz('to_time')->nullable(); ;
            $table->string('video');
            $table->string('material');
            $table->unsignedInteger('num_view');
            $table->json('data');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->primary(['class_id', 'id']);
            $table->index(['from_time', 'to_time']);
            $table->index(['num_view']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter');
    }
}
