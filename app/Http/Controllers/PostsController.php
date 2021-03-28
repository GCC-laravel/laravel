<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    public function index() 
    {
        $user_id = auth()->id();
        $userObj =  User::with('posts')
        ->find($user_id);
        return view('user.posts')
        ->with('posts', $userObj->posts);
    }

    public function view($id) 
    {
        $post = Post::find($id);
        //$post = Post::where('id', $id)->get();
        return view('single-post', compact('post'));

    }
}
