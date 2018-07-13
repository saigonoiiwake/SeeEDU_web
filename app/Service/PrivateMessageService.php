<?php

namespace App\Service;

use App\PrivateMessage;
use App\Events\NewPrivateMessage;

class PrivateMessageService
{
    public static function getUnreadCounts()
    {
        $unread_counts = PrivateMessage::select(\DB::raw('`from_user_id` as sender_id, count(`from_user_id`) as unread_count'))
            ->where('to_user_id', auth()->id())
            ->where('status', false)
            ->groupBy('from_user_id')
            ->get();

        return $unread_counts;
    }

    public static function getLatestMessage($friend_id)
    {
        $message = PrivateMessage::where(function($q) use($friend_id) {
            $q->where('from_user_id', auth()->id());
            $q->where('to_user_id', $friend_id);
        })->orWhere(function($q) use($friend_id) {
            $q->where('from_user_id', $friend_id);
            $q->where('to_user_id', auth()->id());
        })->orderBy('id', 'DESC')
            ->get()
            ->first();

        return $message;
    }

    public static function updateStatus($id)
    {
        // update status to read
        PrivateMessage::where('from_user_id', $id)
            ->where('to_user_id', auth()->id())
            ->update(['status' => true]);
    }

    public static function getMessages($friend_id)
    {
        $messages = PrivateMessage::where(function($q) use($friend_id) {
            $q->where('from_user_id', auth()->id());
            $q->where('to_user_id', $friend_id);
        })->orWhere(function($q) use($friend_id) {
            $q->where('from_user_id', $friend_id);
            $q->where('to_user_id', auth()->id());
        })->orderBy('created_at', 'ASC')
            ->get();

        return $messages;
    }

    public static function sendMessage($friend_id, $message)
    {
        // TODO: should we check friendship?
        // check friendship, not friendship can't send Message
//        $is_friend = FriendshipService::isFriend($friend_id);
//
//        if (!$is_friend) {
//            throw new \Exception('Failed to Send Message');
//        }

        $message = PrivateMessage::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $friend_id,
            'message' => $message,
        ]);

        // broadcast to friend
        broadcast(new NewPrivateMessage($message));

        return $message;
    }
}