@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <h1 class="title">
        {{ $post->title }}
      </h1>
    <div class="content">
       <div class="content_post">
          <p>{{$post->body}}</p>
       </div>
       <div class="content_category">
          <p>{{$post->category_id}}</p>
       </div>
    </div>
        <div class="footer">
          <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集する</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
             @csrf
             @method('DELETE')
         <input type="submit" style="display:none">
         <button class="delete">[<span onclick="return deletePost(this);">削除する</span>]</button>
        </form>
          <a href="/posts">戻る</a>
        </div>
    </body>
</html>
   <script>
       function deletePost(e){
                'use strict';
                if(confirm("本当に削除しますか？")){
                    document.getElemntById("form_delete").submit();
                }
            }
   </script>
@endsection
