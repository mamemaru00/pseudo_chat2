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
    <h1>疑似チャット一覧</h1>

    <div class="chatlist_background">
        <div class="chatlist_create_button">
            <form action="/ChatRooms/store" method="POST">
                @csrf
                <button type="submit">新規作成</button>
            </form>
        </div>
        <div class="chatlist_positon">
            <div class="chatlist_background_color">
                <div class="chatlist_user_name">
                    <p>ユーザー名</p>
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
                    <ul>
                        @foreach ($chat_rooms as $chat_room)
                            {{-- ルーム詳細ページへのリンク --}}
                            <div class="chatlist_room_list">
                                <a href={{ route('ChatMessages.show', ['id' => $chat_room->id]) }}>
                                    {{ $chat_room->room_name }}
                                    <div class="chatlist_edit">
                                        <button href="/">編集</button>
                                    </div>
                                    <div class="chatlist_delete">
                                        <button href="/">削除</button>
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
