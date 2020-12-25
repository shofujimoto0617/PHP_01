<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel8</title>
</head>
<body>
    <h1>input</h1>

    <form action="{{ route('save') }}" method="post">
       @csrf
        <textarea name="content" cols="30" rows="10"></textarea>
        <input type="submit" value="送信">
    </form>
</body>
</html>