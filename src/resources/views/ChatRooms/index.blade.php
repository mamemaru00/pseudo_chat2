<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>疑似チャット一覧</title>
    <link rel="stylesheet" href="{{ asset('/css/ChatList.css') }}">
</head>

<body>
    <div class="chatlist_title">
        <h1>疑似チャット一覧</h1>
    </div>

    <div class="chatlist_background">
        <div class="chatlist_create_button">
            <form action="/ChatRooms/store" method="POST">
                @csrf
                <div class="chat_list_create_position">
                    <div class="chat_list_create">
                        <button type="submit">新規作成</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="chatlist_positon">
            <div class="chatlist_background_color">
                <div class="chatlist_user_name">
                    <h3>ユーザー名</h3>
                    <div class="chatlist_user_name_position">
                        <p>{{ $users->user_name }}</p>
                        <div class="chatlist_user_name_edit">
                            <div class="chatlist_edit">
                                <button href="/">編集</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chatlist_display">
                    <div class="chatlist_room_list_designation">
                        <h3>ルームを選択してください</h3>
                    </div>    
                    <ul>
                        @foreach ($chat_rooms as $chat_room)
                            {{-- ルーム詳細ページへのリンク --}}
                            <div class="chatlist_room_list">
                                <a href={{ route('ChatMessages.show', ['id' => $chat_room->id]) }}>
                                    {{ $chat_room->room_name }}
                                    <div class="chatlist_room_list_edit">
                                        <div class="chatlist_edit">
                                            <button href="/">編集</button>
                                        </div>
                                    </div>
                                    <div class="chatlist_room_list_delete">
                                        <div class="chatlist_delete">
                                            <button href="/">削除</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
