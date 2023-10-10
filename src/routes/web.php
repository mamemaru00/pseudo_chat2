<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\ChatMessageController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// チャットルーム一覧の表示
Route::get('/', [ChatRoomController::class, 'index'])->name('ChatRooms.index');
//チャットルームの新規作成
Route::post('/ChatRooms/store', [ChatRoomController::class, 'store'])->name('ChatRooms.store');
// チャットルーム名の編集
// チャットルームの削除
// ユーザー名の編集 

// チャットメッセージの表示
Route::get('/ChatMessage/{id}', [ChatMessageController::class, 'show'])->name('ChatMessages.show');
// チャットメッセージの送信
Route::post('/message_store', [ChatMessageController::class, 'store'])->name('ChatMessages.message_store');
// チャットメッセージの自動返信を生成
// ユーザーチャットメッセージの判別