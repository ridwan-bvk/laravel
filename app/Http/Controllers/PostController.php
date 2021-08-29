<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('post',[
            "tittle"=>"Blog",
            "posts" => Post::all()//koneksi ke model$blog_post
        ]);
    }
}
