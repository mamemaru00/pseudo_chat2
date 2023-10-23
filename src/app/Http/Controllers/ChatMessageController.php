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
        $chatMessage = new ChatMessages(); 
        $chatMessage->chat_message = $request->chat_message;
        $chatMessage->chat_room_id = 1;
        $chatMessage->save();
        return redirect()->route('ChatMessages.show',['id' => $chatMessage->id]);
    }
}
