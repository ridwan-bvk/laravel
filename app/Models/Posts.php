<?php
/*
Modified by : Ridwan 
Modified at :03/12/2021 
Descript:  4. Posts::latest()->Filter(request(['search','category']))->get()
         penambahan parameter kategory di search di model post.php
         4a disini menambahkan relantionship ke tabel category

Assign : laravel programinng unpas 13 (search &pagination 27:00)
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //ini materi fungsi scopequery, untuk filter
    //cara 1. 11112021,karena if biasanya itu tugas controller buka model. pindah ke controller
    // public function scopeFilter($query){
    //     IF(request('search')){
    //     return $query->where('title','like','%'.request('search').'%')
    //             ->orwhere('body','like','%'.request('search').'%');
    //         }
    //   }
    //cara 2. 12112021,fungsi request diatas kita pindah ke controller
        // public function scopeFilter($query, array $filters){
        //     if (isset($filters['search']) ? $filters['search'] : False) {
        //         return $query->where('title','like','%'.$filters['search'].'%')
        //             ->orwhere('body','like','%'.$filters['search'].'%');
        //     }
        // }
    //cara 3  12112021,when methode in laravel,dia akan menjalankan jika true,jadi tidak usah memakai IF
        public function scopeFilter($query, array $filters){
            //metode null colsecing di php dari if (isset($filters['search']) ? $filters['search'] : False) menjadi $filters['search']?? false
            $query->when($filters['search']?? false,function($query,$search){
                return $query->where('title','like','%'.$search.'%')
                            ->orwhere('body','like','%'.$search.'%');
            });
    //cara 4. penambahan search category,join ke tabel category dg whereHas, perhatikan di post controller bagian 4
            $query->when($filters['category']?? false, function($query,$category){
                //whereHas adalah untuk menjoin relantionship ke tabel category, fungsi use untuk menagmbil parameter category diatasnya karena tidak kebaca jika langsung $category disangkanya adalah variable baru
                return $query->whereHas('category',function($query) use ($category){
                       $query->where('id',$category);
                });
            });
        }
        
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }

}

