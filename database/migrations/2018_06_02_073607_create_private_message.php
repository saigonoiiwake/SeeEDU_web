<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_message', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('from_user_id');
            $table->unsignedInteger('to_user_id');
            $table->text('message');
            $table->boolean('status')->default(false); // false: unread, true: read
            $table->timestamps();
            $table->index(['from_user_id', 'to_user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_message');
    }
}
