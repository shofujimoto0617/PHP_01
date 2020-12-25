<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel8</title>
</head>
<body>
    <h1>詳細画面</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>コンテント</th>
            <th>登録日時</th>
            <th></th>
        </tr>
        <tr>
            <td>{{ $content['id'] }}</th>
            <td>{{ $content['content'] }}</th>
            <td>{{ $content['created_at']->format('Y/m/d H:i') }}</th>
            <td><a href="{{ action('App\Http\Controllers\ContentController@edit', $content['id']) }}">編集</a></td>
            <td>
            <form method="post" action="/delte/{{ $content['id'] }}">
                {{ csrf_field() }}
                <input type="submit" value="削除">
            </form>
            </td>       
        </tr>
    <table>


    <div class="button_wrapper remodal-bg">
        <a href="{{ action('App\Http\Controllers\ContentController@index') }}">戻る</a>
    </div>
</body>
</html>