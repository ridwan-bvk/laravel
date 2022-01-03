<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    use HasFactory;
    protected $guarded =['id'];
    protected $with = ['category','author'];//akan terbawa terus ketk diambil model

        
    public function category(){
     return $this->belongsTo(category::class);
    }
    public function author(){///membuat alias agar tidak merubah struktur field //user(){
        return $this->belongsTo(user::class,'user_id');//memakai alias,sesuaikan smeua pemanggilannya 
    }
}

// class Post {
//     private static  $blog_post1=[
//         [
//             "titles"=>"Judul Pertama",
//             "slug"=>"judul-pertama",
//             "Author"=>"Riddwan Khotib",
//             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ipsum voluptatum eaque nobis hic illum vitae provident earum repudiandae, praesentium officiis ut nulla aspernatur ad eveniet quae laboriosam odit officia?"
//         ],
//         [
//             "titles"=>"Judul Kedua",
//             "slug"=>"judul-kedua",
//             "Author"=>"Ibnu Saefulloh",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis deleniti at dolorum eum beatae quas ullam dolorem, quis animi repellat minima. Libero sed eos nam impedit est, blanditiis maxime cupiditate molestias esse tempora. Molestias dignissimos tempore a facere consectetur optio consequatur iste odio ea ab. Consectetur sapiente, debitis, magnam iure vel temporibus enim optio unde rem veniam perspiciatis facilis sunt hic assumenda explicabo voluptas aperiam modi quae alias eaque suscipit! Id, delectus earum! Nemo earum delectus, eligendi ut cum inventore incidunt quibusdam amet sint, fuga laboriosam perferendis? Vero architecto perferendis atque rerum, voluptatum temporibus sed, quidem quae saepe dolor quisquam."
//         ],
//     ];
    
//     public static function all()
//     {
//         return collect(self:: $blog_post1);//karena dia static pake self,bljr collect untuk merubah array
//     }
//     public static function find($slug){
//         // $posts = self::$blog_post1;
//         $posts = static::all();
       
//         return $posts -> FirstWhere("slug",$slug);

//          //gnti dg collection
//         // $post = [];
//         // foreach($posts as $p){
//         //     if($p["slug"] === $slug){
//         //         $post = $p;
//         //     }

//         // }
//         // return $post;

//         //collection first function
//         //return $posts -> first();

//     }
   
// }
