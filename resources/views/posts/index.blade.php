<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog Review</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href="/reviews/create">create</a>
        <div class='posts'>
            @foreach ($reviews as $review)
                <div class='post'>
                    <h2 class='title'><a href="/reviews/{{ $review->id }}">{{ $review->title }}</a></h2>
                    <p class='body'>{{ $review->body }}</p>
                    <form action="/reviews/{{ $review->id }}" id="form_{{ $review->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $review->id }})">delete</button> 
                        </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $reviews->links() }}
        </div>
        <script>
        function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                
            }
        }
        </script>
    </body>
</html>
