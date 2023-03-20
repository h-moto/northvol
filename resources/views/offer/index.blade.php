<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='offer'>
            @foreach ($offers as $offer)
                <div class='offer'>
                    <h2 class='title'>{{ $offer->title }}</h2>
                    <p class='body'>{{ $offer->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>