<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Headlines</h1>
    @foreach ($response['articles'] as $article)
        <div>
            <img src="{{ $article['urlToImage'] }}" alt="" srcset="">
            <h2>{{ $article['title'] }}</h2>
            <p>{{ $article['description'] }}</p>
            <a href="{{ $article['url'] }}" target="_blank">Read Here</a>
        </div>
        <hr/>
    @endforeach
</body>
</html>
