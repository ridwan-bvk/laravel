<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \App\Models\Posts;
use \App\Models\Post;
use \App\Models\User;
/*
created by : Ridwan
Create at :10/11/2021
Descript: Laravel tutrial programing unpas, mengecek ada request atau ga
Modified by : Ridwan 
Modified at :11/11/2021 
Descript: : 2. metode scope, query nya dipindah ke model
Assign : laravel programinng unpas 13
Modified by : Ridwan 
Modified at :12/11/2021 
Descript: : 3. modify "posts" => Posts::latest()->Filter()->get() ditambah parameter request
Assign : laravel programinng unpas 13
Modified by : Ridwan 
Modified at :03/12/2021 
Descript:  4. Posts::latest()->Filter(request(['search','category']))->get()
         penambahan parameter kategory di search

Assign : laravel programinng unpas 13 (search &pagination 27:00)
Modified by : Ridwan 
Modified at :03/12/2021 
Descript:  penambaahan paginate() untuk halaman

Assign : laravel programinng unpas 13 (search &pagination 27:00)
Modified by : Ridwan 
Modified at :29/12/2021 
Descript:  penambaahan paginate()->withQueryString()

Assign : laravel programinng unpas 13 (search &pagination 29:00)
*/

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));//menangkap request
        //1.query
        //2.pindahlagi kebawah
        //$posts = Posts::latest();
        
        //10/11/2021 : 1. cek ada request ga
        //11/11/2021 : 2. metode scope, query nya dipindah ke model
        // IF(request('search')){
        //     $posts->where('title','like','%'.request('search').'%')
        //           ->orwhere('body','like','%'.request('search').'%');
        // };
        //29/12/2021
        $title = '';
         //ini untuk penambahan title in   
        if (request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in '.$category->name;
        }
        if (request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = ' by '. $author->name;

        }
        return view('posts', [
            "tittle" => "Kabeh POS". $title,
            "active" => "blog",//kirimin aktif untuk menyalakan navbar
            // "posts" => Posts::all() //koneksi ke model$blog_post
            // "posts" => Posts::latest()->get()
            //1. 10/11/2021. perubahan setelah qury
                // "posts" => $posts->get()
            //2.11/11/2021 make query scope di model post.model
                // "posts" => Posts::latest()->Filter()->get()
            //3.12/11/2021 menambah parameter di request
                // "posts" => Posts::latest()->Filter(request(['search']))->get()
            //4. penambahan pencarian untuk category
            // "posts" => Posts::latest()->Filter(request(['search','category']))->get()
            //5. penambahan halaman
                // "posts" => Posts::latest()->Filter(request(['search','category','author']))->paginate(7)
            //6. penambahan withQueryString()
            "posts" => Posts::latest()->Filter(request(['search','category','author']))->paginate(7)->WithQueryString()

        ]);
    }
    public function show($id) //lemparaan dan modelnya jg,route mode binding
    {
        return view('post', [
            "tittle" => "single post",
             "active" => "blog",
            "post" => Post::find($id) //Post::find($slug)//koneksi ke model$blog_post

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
