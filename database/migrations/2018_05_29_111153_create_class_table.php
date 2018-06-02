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
            $table->string('name');
            // class status: reviewing, open, rejected...
            $table->string('status')->default('reviewing')->comment('status for the class');     
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('num_enroll');
            $table->unsignedInteger('min_num');
            $table->unsignedInteger('max_num');
            $table->string('currency', 3);
            $table->float('price');
            $table->float('early_bird_price')->nullable();
            $table->unsignedInteger('early_bird_num')->nullable();  // ? how to operate? 
            $table->timestamp('start_date')->nullable(); 
            $table->timestamp('end_date')->nullable(); 
            $table->json('data')->nullable()->comment('metadata');     
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->primary('id');
            $table->index(['id', 'updated_at']);
            $table->index(['category_id']);
            $table->index(['status']);
            $table->index(['min_num', 'num_enroll', 'max_num']); // ?
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
