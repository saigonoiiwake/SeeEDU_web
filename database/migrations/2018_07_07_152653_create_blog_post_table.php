<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post', function (Blueprint $table) {
          $table->unsignedInteger('id');
          $table->string('title');
          $table->string('slug');
          $table->text('content');
          $table->integer('blog_category_id');
          $table->string('featured');
          $table->softDeletes();
          $table->timestamps();
          $table->primary('id');
          $table->index('slug');
          $table->index('blog_category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post');
    }
}
