<?php

use Faker\Generator as Faker;

$factory->define(App\PrivateMessage::class, function (Faker $faker) {
    $friendships = App\Friendship::all()->toArray();
    $random = array_random($friendships);

    return [
        'from_user_id' => $random['user_id'],
        'to_user_id'=> $random['friend_id'],
        'message' => $faker->sentence,
    ];
});