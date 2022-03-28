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
      <form action ="/posts/{post}" method="POST">
          @csrf
          @method('PUT')
        <div class="content_title">
            <h1>タイトル</h1>
               <input type="text" name="post[title]" value="{{ $post->title }}"></input>
            <div class="body">
              <h2>本文</h2>
               <textarea name="post[body]" value="{{ $post->body }}"></textarea><br>
            </div>
             <div class="category">
                  <h3>カテゴリー</h3>
                 <select name="post[category_id]">
                   @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                   @endforeach
                 </select>
             </div>
        </div>
        <input type="submit" value="保存">
      </form>
    </body>
</html>
@endsection
