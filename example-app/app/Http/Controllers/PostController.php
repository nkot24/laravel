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
    public function show(Post $post){

        return view('posts.show',  ['singlepost'=>$post]);
    }
    public function create(){
        return"test";
        return view('posts.create');
    }
    public function store(){
        return"to be implimented";
        //majas izveidot jaunu post ierakstu db
    }
}
