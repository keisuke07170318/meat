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
      <form action="/posts/profile" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        {{ csrf_field() }}
        <input type="submit" value="アップロード">
      </form>
       <img src="{{Auth::user()->image_url }}">
      <h1>{{ Auth::user()->name }}</h1>
    </body>
</html>
@endsection
