<?php

namespace App\Service;

use App\Friendship;

class FriendshipService
{
    public static function getFriendships()
    {
        $friends = Friendship::where('user_id', '=', auth()->id())
            ->where('active', '=', true)
            ->get();

        return $friends;
    }

    public static function isFriend($friend_id)
    {
        $friendship = Friendship::where('user_id', '=', auth()->id())
            ->where('friend_id', '=', $friend_id)
            ->where('active', '=', true)
            ->get();

        return count($friendship) ? true : false;
    }
}
