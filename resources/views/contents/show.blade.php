<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細画面</title>
</head>
<body>
    <ul>
        <li>{{ $content['id'] }}</li>
        <li>{{ $content['content'] }}</li>
        <li>{{ $content['created_at']->format('Y/m/d H:i') }}</li>
    </ul>
</body>
</html>