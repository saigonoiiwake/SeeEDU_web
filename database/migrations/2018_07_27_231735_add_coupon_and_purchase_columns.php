<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCouponAndPurchaseColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('transaction', function (Blueprint $table) {
          $table->unsignedInteger('course_id')->after('user_id');
          $table->unsignedInteger('purchase_price')->after('course_id');
          $table->string('channel', 15)->after('purchase_price');
          $table->string('coupon_code', 6)->after('channel')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('transaction', function (Blueprint $table) {
          $table->dropColumn('course_id');
          $table->dropColumn('purchase_price');
          $table->dropColumn('channel');
          $table->dropColumn('coupon_code');
      });
    }
}
