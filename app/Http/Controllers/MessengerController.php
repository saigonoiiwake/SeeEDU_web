<?php

namespace App\Http\Controllers;

use App\Service\FriendshipService;
use App\Service\PrivateMessageService;
use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('messenger');
    }

    public function getFriendship()
    {
        // get friendship
        $friendships = FriendshipService::getFriendships();

        // [ ['sender_id' => 123456789, 'unread_count' => 5], ['sender_id' => 987654321, 'unread_count' => 3] ]
        $unread_counts = PrivateMessageService::getUnreadCounts();

        // get friend_list with unread_count and latest_message
        $friend_list = $friendships->map(function($friendship) use($unread_counts) {
            $friend_unread = $unread_counts->where('sender_id', $friendship->friend_id)->first();

            $latest_message = PrivateMessageService::getLatestMessage($friendship->friend_id);

            return [
                'id'     => $friendship->friend->id,
                'name'   => $friendship->friend->name,
                'avatar' => $friendship->friend->avatar,
                'unread' => $friend_unread ? $friend_unread->message_count : 0,
                'latest_message' => $latest_message ? $latest_message->message : "",
                'updated_at' => $latest_message ? $latest_message->updated_at->timestamp : 0,
            ];
        });

        return response()->json($friend_list);
    }

    public function getMessagesFor($id)
    {
        PrivateMessageService::updateStatus($id);

        $messages = PrivateMessageService::getMessages($id);

        // restruct the response
        $messages = $messages->map(function($message)  {
            return [
                'from_user_id' => $message->from_user_id,
                'to_user_id'   => $message->to_user_id,
                'message'      => $message->message,
                'created_at'   => $message->created_at->timestamp,
                'updated_at'   => $message->updated_at->timestamp,
            ];
        });

        return response()->json($messages);
    }

    public function send(Request $request)
    {
//        try {
            $message = PrivateMessageService::sendMessage($request->friend_id, $request->message);
//        } catch (\Exception $e) {
              // send message failed
//            response()->json(['error' => $e->getMessage()], 403);
//        }

        return response()->json([
            'from_user_id' => $message->from_user_id,
            'to_user_id'   => $message->to_user_id,
            'message'      => $message->message,
            'created_at'   => $message->created_at->timestamp,
            'updated_at'   => $message->updated_at->timestamp,
        ]);
    }
}