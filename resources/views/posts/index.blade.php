<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
        <title>Blog Review</title>
=======
        <title>Blog_Review</title>
>>>>>>> origin/master

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
<<<<<<< HEAD
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($reviews as $review)
                <div class='post'>
                    <h2 class='title'>{{ $review->title }}</h2>
                    <p class='body'>{{ $review->body }}</p>
                </div>
            @endforeach
=======
        <h1 class = "title">Blog Name</h1>
        <div class = "posts">
            @foreach ($reviews as $review)
                <div class = "post">
                    <h2 class = "title">
                        <a href="/reviews/{{ $review->id }}">{{ $review->title }}</a>
                    </h2>
                    <p class = "body">{{ $review->body }}</p>
                </div>
                @endforeach
>>>>>>> origin/master
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
    </body>
</html>
