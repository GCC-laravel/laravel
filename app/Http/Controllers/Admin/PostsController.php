<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{
    public function index()
    {
        session()->put('myvalue', 'value');
        session()->forget('myvalue');
        //return session()->get('myvalue');
        return session()->all();
        // return Route::currentRouteName();
        $posts = Post::with('user')->paginate(10);
        return view('dashboard.posts', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('dashboard.posts.show')
        ->withPost($post);
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => Rule::requiredIf(function () use ($request) {
                return !$request->has('old_image');
            })
        ]);
        
        $newImage = $request->old_image;

        if($request->hasFile('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $name = $request->file('image')->getClientOriginalName();
            $newImage = time(). '_' . $name;
            $request->file('image')->move('images', $newImage);
        }
        
        $title = $request->get('title');
        $body = $request->get('body');

        $post->update([
            'title' => $title,
            'body' => $body,
            'image' => $newImage
        ]);
        
        return redirect()
                ->action('App\Http\Controllers\Admin\PostsController@index')
                ->with('message', 'Post updated!');
    }
}
