<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() 
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();
        
    } 

    public function show(Post $post)
    {
        $author = $post->author()->first();
        $categories = $post->categories()->get();
        return view('listPost', [
            'post' => $post,
            'author' => $author,
            'categories' => $categories
        ]);
    }
}
