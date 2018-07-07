<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixBlogPostColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_post', function (Blueprint $table) {
            $table->unsignedInteger('blog_category_id')->change();
        });

        Schema::table('blog_post_tag', function (Blueprint $table) {
            $table->unsignedInteger('post_id')->change();
            $table->unsignedInteger('tag_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_post', function (Blueprint $table) {
            $table->integer('blog_category_id')->change();
        });

        Schema::table('blog_post_tag', function (Blueprint $table) {
            $table->integer('post_id')->change();
            $table->integer('tag_id')->change();
        });
    }
}
