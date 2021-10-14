<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ["tittle" => "Home"]);
});

Route::get('/about', function () {
    return view(
        'about',
        [
            "name" => "ridwan",
            "email" => "ridwan@gmail.com",
            "image" => "",
            "tittle" => "About"
        ]
    );
});

// Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'tittle'=>$category->name,
        'posts'=>$category->posts,
        'category'=>$category->name
    ]);
});

// [PostController::class, 'categories']);

Route::get('post/{id}', function ($id) {
    return view("post", [
        "tittle" => "single post",
        "post" => Post::find($id)
    ]);
});

//ubah jdai controller
// Route::get('/blog', function () {
// $blog_post=[
//     [
//         "titles"=>"Judul Pertama",
//         "slug"=>"judul-pertama",
//         "Author"=>"Riddwan Khotib",
//         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ipsum voluptatum eaque nobis hic illum vitae provident earum repudiandae, praesentium officiis ut nulla aspernatur ad eveniet quae laboriosam odit officia?"
//     ],
//     [
//         "titles"=>"Judul Kedua",
//         "slug"=>"judul-kedua",
//         "Author"=>"Ibnu Saefulloh",
//         "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis deleniti at dolorum eum beatae quas ullam dolorem, quis animi repellat minima. Libero sed eos nam impedit est, blanditiis maxime cupiditate molestias esse tempora. Molestias dignissimos tempore a facere consectetur optio consequatur iste odio ea ab. Consectetur sapiente, debitis, magnam iure vel temporibus enim optio unde rem veniam perspiciatis facilis sunt hic assumenda explicabo voluptas aperiam modi quae alias eaque suscipit! Id, delectus earum! Nemo earum delectus, eligendi ut cum inventore incidunt quibusdam amet sint, fuga laboriosam perferendis? Vero architecto perferendis atque rerum, voluptatum temporibus sed, quidem quae saepe dolor quisquam."
//     ],
// ];
//     return view('post',[
//         "tittle"=>"Blog",
//         "posts" => Post::all()//koneksi ke model$blog_post
//     ]);
// });
    // $new_post = [];
    // foreach ($blog_post1 as $post2) 
        
    //     if ($post2["slug"] == $slug) {
    //         $new_post = $post2;
    //     }; 
   
    
        // "titles"=>"Judul Pertama",
        // "slug"=>"judul-pertama",
        // "Author"=>"Riddwan Khotib",
        // "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ipsum voluptatum eaque nobis hic illum vitae provident earum repudiandae, praesentium officiis ut nulla aspernatur ad eveniet quae laboriosam odit officia?",
       //$new_post 
