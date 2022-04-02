<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
     public function index(Post $post)
     {
     return view('posts/index')->with(['posts' => $post->get()]);  
     }
     
     public function show(Post $post)
     {
     return view('posts/show')->with(['post' => $post]);  
     }
     
     public function edit(Post $post, Category $category)
     {
     return view('posts/edit')->with(['post' => $post , 'categories' => $category->get()]);  
     }
     
     public function store(Request $request, Post $post)
     {
     $input = $request['post'];
     $input += ['user_id' => $request->user()->id];   
     $post->fill($input)->save();
     return redirect('/posts/' . $post->id);
     }
     
     public function create(Category $category)
     {
      return view('posts/create')->with(['categories' => $category->get()]);;
     }
     
     public function delete(Post $post)
     {
      $post->delete();
      return redirect('/posts');
     }
     
     public function add(Request $request, User $user)
     {
      $image = $request->file('image');
      $path = Storage::disk('s3')->putFile('meat', $image, 'public');
      $user=Auth::user();
      $user->image_url = Storage::disk('s3')->url($path);
      $user->save();
      return redirect('/posts/profile');
     }

     public function profile(Request $request, User $user)
     {
      return view('posts/profile');
     }
}
