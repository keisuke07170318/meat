<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="posts">
          @foreach($posts as $post)
            <div class="post">
                <h1 clsss="title">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
                <p class="body">
                    <a href="/posts/{{ $post->id}}">{{$post->body}}</a>
                </p>
            </div>
          @endforeach
        </div>
    </body>
</html>
