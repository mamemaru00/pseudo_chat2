<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chatRooms;
use App\Models\User;

class ChatRoomController extends Controller
{
    public function index()
    {
        $users = User::first();

        $chat_rooms = chatRooms::all();

        return view('ChatRooms.index', compact('users', 'chat_rooms'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $chat_room_create = new chatRooms();
        $chat_room_count = chatRooms::count();
        $chat_room_name = 'ルーム' . ($chat_room_count + 1);
        $chat_room_create->roomName = $chat_room_name;
        $chat_room_create->save();

        return redirect()->route('ChatRooms.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
