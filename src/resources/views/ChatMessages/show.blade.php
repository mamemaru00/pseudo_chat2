<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>擬似チャットメッセージ</title>
</head>

<body>
    <h1>疑似チャットメッセージ</h1>


    {{-- 送信した内容が一覧で表示 --}}
    {{-- textを入力欄を追加してください --}}
    {{-- 送信ボタンを追加 --}}
    <form action="/message_store" method="POST">
        {{-- <form action="{{ route('message_store', ['id' => $id]) }}" method="POST"> --}}
        @csrf
        <input type="text" name="chat_message">
        <button type="submit">送信</button>
    </form>
</body>

</html>
