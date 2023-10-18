<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRooms extends Model
{
    use HasFactory;

    // コンストラクターでidを割り振る

    protected $fillable = [
        'id',
        'room_name',
    ];

    public function chatMessages()
    {
        return $this->hasMany(ChatMessages::class);
    }
}
