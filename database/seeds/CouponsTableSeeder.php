<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
          'code' => 'ABC123',
          'type' => 'fixed',
          'value' => 100,
        ]);

        Coupon::create([
          'code' => 'CDE123',
          'type' => 'percent',
          'percent_off' => 20,
        ]);

    }
}
