<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chatRooms;
use App\Models\User;
use App\Models\chatMessages;

class ChatMessageController extends Controller
{
    public function show() {
        return view('ChatMessages.show');
    }

    // チャットメッセージの送信
    public function store(Request $request) {
        // dd($request->all());  // 追加
        $chatMessage = new ChatMessages();  // 変数名を修正
        $chatMessage->chat_message = $request->chat_message;
        // $chatMessage->user_id = $request->user_id;  // マイグレーションにはuser_idが存在しないので削除
        $chatMessage->chat_room_id = '1';
        $chatMessage->is_system_message = $request->is_system_message ?? false;  // 追加
        // dd($chatMessage);  // 追加
        $chatMessage->save();

        return redirect()->route('ChatMessages.show');
    }
}
