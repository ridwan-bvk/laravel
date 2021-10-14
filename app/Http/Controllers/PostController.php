<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \App\Models\Posts;
use \App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "tittle" => "Blog",
             "posts" => Posts::all()//koneksi ke model$blog_post
             
        ]);
    
    }
    public function show($id) //lemparaan dan modelnya jg,route mode binding
    {
        
        return view('post', [
            "title" => "Blog",
              "post" => Post::find($id)//Post::find($slug)//koneksi ke model$blog_post
             
        ]);
    
    }
    // public function categories(category $category)
    // {
    //     // return view('post', [
    //     //     "tittle" => "Blog",
    //     //      "posts" => Category::find($slug)//koneksi ke model$blog_post
             
    //     // ]);
    
    
    // }
    
}
