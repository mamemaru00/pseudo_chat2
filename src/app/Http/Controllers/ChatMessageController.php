<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chatRooms;
use App\Models\User;
use App\Models\chatMessages;

class ChatMessageController extends Controller
{
    public function show() {
        return view('chatMessages.show');
    }
}
