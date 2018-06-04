<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->unsignedInteger('id')->comment('class id');
            $table->string('title');  // max 58 chinese
            // class status: submitted, reviewing, success, rejected...
            $table->string('status')->comment('status for the class');     
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('enroll_num');
            $table->unsignedInteger('min_num');
            $table->unsignedInteger('max_num');
            $table->string('currency', 3);
            $table->float('price');
            $table->float('early_bird_price')->nullable();
            $table->unsignedInteger('early_bird_num')->nullable();
            $table->timestamp('start_date')->nullable(); 
            $table->timestamp('end_date')->nullable(); 
            $table->json('data')->nullable()->comment('metadata');     
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->primary('id');
            $table->index(['id', 'updated_at']);
            $table->index(['category_id']);
            $table->index(['title']);
            $table->index(['status']);
            $table->index(['min_num', 'enroll_num', 'max_num']); // ?
            $table->index(['currency', 'price']);
            $table->index(['start_date', 'end_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class');
    }
}
