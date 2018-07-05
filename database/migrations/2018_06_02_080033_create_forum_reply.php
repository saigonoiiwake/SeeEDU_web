<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumReply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_reply', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('forum_id');
            $table->unsignedInteger('user_id');
            $table->text('content');
            $table->timestamps();
            $table->index(['forum_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forum_reply');
    }
}
