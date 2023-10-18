<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chatRooms;
use App\Models\User;
use App\Models\chatMessages;

class ChatMessageController extends Controller
{
    public function show($id) {
        return view('ChatMessages.show', compact('id'));
    }

    // チャットメッセージの送信
    public function store(Request $request) {
        $chatMessage = new ChatMessages();  // 変数名を修正
        $chatMessage->chat_message = $request->chat_message;
        // $chatMessage->chat_room_id = chatRooms::findOrFail($request->chat_room_id)->id;
        // $chatMessage->is_system_message = $request->is_system_message ?? false;  // 追加
        
        // chatRoomsの最初のレコードのidを取得後に、chat_room_idに代入

        // $chatMessage->chat_room_id = 1;
        // $request->merge(['chat_room_id' => $id]);
        // dd($request->all());
        // dd($request->all());
        // $chatMessage->fill($request->all())->save();  
        // dd($chatMessage);
        $chatMessage->chat_room_id = 1;
        $chatMessage->save();
        return redirect()->route('ChatMessages.show',['id' => $chatMessage->id]);
    }
}
