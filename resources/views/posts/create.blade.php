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
        <h1>Blog Name</h1>
        <form action="/reviews" method="POST">
            @csrf
            <div class='title'>
                <h2>Title</h2>
                <input type="text" name="review[title]" placeholder="タイトル" value="{{ old('review.title') }}"/>
                <p class="title_error" style="color:red">{{ $errors->first('review.title') }}</p>
            </div>
            
            <div class = "body">
                <h2>Body</h2>
                <textarea name="review[body]" placeholder="今日も一日お疲れ様でした。">{{ old('review.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class='back'>
            [<a href="/">戻る</a>]
        </div>
    </body>
</html>
