<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel8</title>
</head>
<body>
    <h1>一覧画面</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>コンテント</th>
            <th>投稿日時</th>
            <th></th>
        </tr>
        @foreach ($contents as $content)
            <tr>
                <td>{{ $content['id'] }}</td>
                <td>{{ $content['content'] }}</td>
                <td>{{ $content['created_at']->format('Y/m/d H:i') }}</td>
                <td><a href="{{ action('App\Http\Controllers\ContentController@show', $content['id']) }}" class="btn btn-primary btn-sm">詳細</a></td>
            </tr>
        @endforeach        
    </table>
    <a href="{{ action('App\Http\Controllers\ContentController@input') }}">新規投稿</a>
</body>
</html>