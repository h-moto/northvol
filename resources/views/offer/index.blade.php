<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Northvol</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Northvol page</h1>
        <div class='offers'>
            @foreach ($offers as $offer)
                <div class='offer'>
                    <h2 class='id'>{{ $offer->id }}</h2>
                    <h2>comment</h2>
                </div>
            @endforeach
        </div>
    </body>
</html>