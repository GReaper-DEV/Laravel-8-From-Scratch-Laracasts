<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('.posts.index', [
            //pass the results into posts variable
            //give me the posts, that i filtered IF there is any, by the newest order.
            'posts' => Post::latest()->filter(\request(['search','category', 'author']))->get()
        ]);
    }


    public function show(Post $post){
        return  view('posts.show', ['post' => $post]);
    }
}
