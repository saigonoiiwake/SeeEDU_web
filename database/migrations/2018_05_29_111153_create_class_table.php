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
            $table->unsignedInteger('id')->comment('Class id');
            $table->string('name');
            // class status: reviewing, open, rejected...
            $table->string('status')->default('reviewing')->comment('Status for the class');     
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('min_number');
            $table->unsignedInteger('max_number');
            $table->string('currency', 3);
            $table->float('price');
            $table->float('early_bird_price')->nullable();
            $table->unsignedInteger('early_bird_number')->nullable();
            $table->timestampTz('start_date');
            $table->timestampTz('end_date');
            $table->json('data')->nullable()->comment('Metadata');        
            $table->timestampsTz();      // for created_at and updated_at
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
