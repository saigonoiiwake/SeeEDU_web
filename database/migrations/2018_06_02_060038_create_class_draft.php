<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassDraft extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_draft', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('min_num')->nullable();
            $table->unsignedInteger('max_num')->nullable();
            $table->string('currency', 3)->nullable();
            $table->float('price')->nullable();
            $table->float('early_bird_price')->nullable()->nullable();
            $table->unsignedInteger('early_bird_num')->nullable()->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->longText('description')->nullable();
            $table->json('chapter')->nullable();
            $table->json('data')->nullable()->comment('metadata'); 
            $table->uuid('exhibit_token')->comment('avoid duplicate');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->index(['user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_draft');
    }
}
