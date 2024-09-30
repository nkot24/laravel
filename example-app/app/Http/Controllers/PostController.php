<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        //dd($posts);
        //\Log::debug($posts);
        return view('posts.index', ['allposts'=>$posts]);

    }
}
