<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function post(){
        return $this->belongsTo(post::class);
    }
    // public static function find($slug){
    //     // $posts = self::$blog_post1;
    //     $posts = static::all();
       
    //     return $posts -> FirstWhere("slug",$slug);
    // }
}
