<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel8</title>
</head>
<body>
    <h1>編集画面</h1>
    <form action="{{ route('update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $content['id'] }}">
        <textarea name="content" cols="30" rows="10">{{ $content['content'] }}</textarea>
        <input type="submit" value="送信">
    </form>
    <p>投稿時間: {{ $content['created_at'] }}</p>
</body>
</html>