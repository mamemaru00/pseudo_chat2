<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>疑似チャット一覧</title>
</head>

<body>
    <h1>疑似チャット一覧</h1>

    {{-- ユーザー名表示 --}}
    <p>ユーザー名：{{ $users->user_name }}</p>
    {{-- 新規作成ボタン作成 storeで新規作成 --}}
    {{-- <a href={{ route('chatRooms.store') }}>新規作成</a> --}}
    {{-- ルートのnameで指定する --}}
    {{-- <form action="/ChatRooms/store" method="POST"> --}}
    <form action="{{ route('ChatRooms.store') }}" method="POST">
        @csrf
        <button type="submit">新規作成</button>
    </form>

    {{-- ルーム一覧表示 --}}
    <ul>
        @foreach ($chat_rooms as $chat_room)
            <li>
                {{-- ルーム詳細ページへのリンク --}}
                <a href={{ route('ChatMessages.show', ['id' => $chat_room->id]) }}>
                    {{ $chat_room->room_name }}
                </a>
            </li>
        @endforeach
    </ul>
</body>

</html>
