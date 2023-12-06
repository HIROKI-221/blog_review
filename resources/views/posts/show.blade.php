<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog_Review</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1 class = "title">
            {{ $review->title }}
        </h1>
        <div class = "content">
            <div class="content_post">
                <h3>本文</h3>
                <p>{{ $review->body }}</p>
            </div>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
