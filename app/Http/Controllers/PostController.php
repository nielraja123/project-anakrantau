<?php

namespace App\Http\Controllers;
use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest();
        if(request('search')){
            $posts->where('title','like','%' . request('search') . '%');
        }
        // dd(request('search'));
        return view('posts',[
            "title"=>"All Posts",
            "active"=>'posts',
            "posts"=>$posts->get()
        ]);
    }
    public function show(Post $post){
        return view('post',[
            "title"=>"Single Post",
            "active"=>'posts',
            "post"=>$post
        ]);
    }
}
