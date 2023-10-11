<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chatRooms;
use App\Models\User;
use App\Models\chatMessages;

class ChatMessageController extends Controller
{
    public function show($id) {
        return view('ChatMessages.show');
    }

    // チャットメッセージの送信
    public function store(Request $request, $id) {
        $chatMessage = new ChatMessages();  // 変数名を修正
        // $chatMessage->chat_message = $request->chat_message;
        // // $chatMessage->user_id = $request->user_id;  // マイグレーションにはuser_idが存在しないので削除
        // $chatMessage->chat_room_id = chatRooms::findOrFail($request->chat_room_id)->id;
        // $chatMessage->is_system_message = $request->is_system_message ?? false;  // 追加
        // $chatMessage->save();
        // chatRoomsの最初のレコードのidを取得後に、chat_room_idに代入

        $chatMessage->chat_room_id = chatRooms::first()->id;
        // $chatMessage->chat_room_id = 1;
        // $request->merge(['chat_room_id' => $id]);
        // dd($request->all());
        $chatMessage->fill($request->all())->save();  // こちらの方が簡潔
        // dd($chatMessage);
        return redirect()->route('ChatMessages.show',['id' => $chatMessage->id]);
    }
}
