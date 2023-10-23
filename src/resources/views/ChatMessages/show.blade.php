<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/ChatMessage.css') }}">
    <title>擬似チャットメッセージ</title>
</head>

<body>
    <h1>疑似チャットメッセージ</h1>

    {{-- チャットメッセージを表示 --}}
    {{-- チャットメッセージを表示するためのforeachを追加してください --}}

    {{-- ダミーで見た目作成 --}}
    <div class="chatmessage_list">
            <div class="chatmessage_list_item">
                <div class="chatmessage_list_item_message">
                    <p>メッセージ</p>
                </div>
                <div class="chatmessage_list_item_name">
                    <h3>ユーザー</h3>
                </div>
            </div>
    </div>

    <div class="chatmessage_list_bot">
        <div class="chatmessage_list_bot_item_bot">
            <div class="chatmessage_list_bot_item_message_bot">
                <p>メッセージ</p>
            </div>
            <div class="chatmessage_list_bot_item_name_bot">
                <h3>ボット</h3>
            </div>
        </div>
    </div>

    {{-- 送信した内容が一覧で表示 --}}
    {{-- textを入力欄を追加してください --}}
    {{-- 送信ボタンを追加 --}}
    {{-- <form action="/message_store" method="POST"> --}}
    <div class="chatmessage_post_background">    
        <form action={{ route('message_store', ['id' => $id]) }} method="POST">
            @csrf
                <div class="chatmessage_post">
                    <input type="text" name="chat_message">
                    <button type="submit">送信</button>
                    <button type="button" onclick="location.href='{{ route('ChatRooms.index') }}'">戻る</button>
                </div>
        </form>
    </div>
</body>

</html>
