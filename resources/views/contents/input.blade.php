<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel8</title>
</head>
<body>
    <h1>投稿画面</h1>

    <form action="{{ route('save') }}" method="post">
       @csrf
        <textarea name="content" cols="30" rows="10"></textarea>
        <input type="submit" value="送信">
    </form>

    <a href="{{ action('App\Http\Controllers\ContentController@index') }}">戻る</a>
</body>
</html>