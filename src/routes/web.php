<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// チャットルーム一覧の表示
Route::get('/', [ChatRoomController::class, 'index'])->name('chatRooms.index');
//チャットルームの新規作成
// Route::post('/chatRooms/store', [ChatRoomController::class, 'store'])->name('chatRooms.store');
// チャットルーム名の編集
// チャットルームの削除
// ユーザー名の編集 

// チャットメッセージの表示
// Route::get('/chatMessage/{id}', [ChatMessageController::class, 'show'])->name('chatMessages.show');
// チャットメッセージの送信
// チャットメッセージの自動返信を生成
// ユーザーチャットメッセージの判別