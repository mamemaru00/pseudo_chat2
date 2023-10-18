<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'chat_room_id',
        'chat_message',
        'is_system_message',
    ];

    public function chatRoom()
    {
        return $this->belongsTo(chatRooms::class);
    }
}
