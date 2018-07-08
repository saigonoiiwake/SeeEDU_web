<?php

namespace App\Http\Controllers;

use App\Friendship;
use App\PrivateMessage;
use App\Events\NewPrivateMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $friendships = Friendship::where('user_id', '=', auth()->id())->get();

        $unread_ids = PrivateMessage::select(\DB::raw('`from_user_id` as sender_id, count(`from_user_id`) as message_count'))
            ->where('to_user_id', auth()->id())
            ->where('status', false)
            ->groupBy('from_user_id')
            ->get();

        $friend_list = $friendships->map(function($friendship) use($unread_ids) {
            $friend_unread = $unread_ids->where('sender_id', $friendship->friend_id)->first();

            $newest_message = PrivateMessage::where(function($q) use($friendship) {
                $q->where('from_user_id', auth()->id());
                $q->where('to_user_id', $friendship->friend_id);
            })->orWhere(function($q) use($friendship) {
                $q->where('from_user_id', $friendship->friend_id);
                $q->where('to_user_id', auth()->id());
            })->orderBy('id', 'DESC')
                ->get()
                ->first();

            return [
                'id'     => $friendship->friend->id,
                'name'   => $friendship->friend->name,
                'avatar' => $friendship->friend->avatar,
                'unread' => $friend_unread ? $friend_unread->message_count : 0,
                'newest_message' => $newest_message ? $newest_message->message : "",
                'updated_at' => $newest_message ? $newest_message->updated_at->timestamp : 0,
            ];
        });

        return response()->json($friend_list);
    }

    public function getMessagesFor($id)
    {
        PrivateMessage::where('from_user_id', $id)
            ->where('to_user_id', auth()->id())
            ->update(['status' => true]);

        $messages = PrivateMessage::where(function($q) use($id) {
            $q->where('from_user_id', auth()->id());
            $q->where('to_user_id', $id);
        })->orWhere(function($q) use($id) {
            $q->where('from_user_id', $id);
            $q->where('to_user_id', auth()->id());
        })->get();

        $messages = $messages->map(function($message)  {
            return [
                'from_user_id' => $message->from_user_id,
                'to_user_id'   => $message->to_user_id,
                'message'      =>  $message->message,
                'created_at'   => $message->created_at->timestamp,
                'updated_at'   => $message->updated_at->timestamp,
            ];
        });

        return response()->json($messages);
    }

    public function send(Request $request)
    {
        $message = PrivateMessage::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $request->friend_id,
            'message' => $request->message,
        ]);

        broadcast(new NewPrivateMessage($message));

        return response()->json([
            'from_user_id' => $message->from_user_id,
            'to_user_id'   => $message->to_user_id,
            'message'      =>  $message->message,
            'created_at'   => $message->created_at->timestamp,
            'updated_at'   => $message->updated_at->timestamp,
        ]);
    }
}