<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    $users = App\Course::all()->toArray();

    return [
        'id'                => App\Course::generateIdSafe(),
        'title'             => '課程標題須介於九個字到十六字之間',
        'status'            => 'STATUS_SUBMIT',
        'course_category_id'=> 1,
        'enroll_num'        => $faker->numberBetween($min = 10, $max = 100),
        'min_num'           => 10,
        'max_num'           => 100,
        'browse_num'        => $faker->numberBetween($min = 1000, $max = 9000),
        'currency_id'       => 1,
        'price'             => $faker->numberBetween($min = 2000, $max = 10000),
        'from_date'         => $faker->date($format = 'Y-m-d', $max = 'now'),
        'to_date'           => $faker->date($format = 'Y-m-d', $max = 'now'),
        'featured'          => $faker->imageUrl($width = 640, $height = 480),
        'video'             => 'https://www.youtube.com/watch?v=vS6AK-OGgq4'
    ];
});
