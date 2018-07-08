<?php

use Faker\Generator as Faker;

$factory->define(App\Friendship::class, function (Faker $faker) {
    $users = App\User::all()->toArray();

    do {
        $randoms = array_random($users, 2);

        $result = App\Friendship::where('user_id', $randoms[0]['id'])
            ->where('friend_id', $randoms[1]['id'])->get();

    } while (count($result) != 0);

    return [
        'user_id' => $randoms[0]['id'],
        'friend_id'=> $randoms[1]['id'],
    ];
});
