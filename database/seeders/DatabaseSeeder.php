<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Seeder;
use App\Models\User;

use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //cara pake seed
        User::factory(3)->create();
        Post::factory(20)->create();

//ini cara manual tanpa fake
        // User::create([
        //     'name' => 'ridwan',
        //     'email' => 'ridwan@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Halwah',
        //     'email' => 'Halwah@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Hobbies',
            'slug' => 'Hobbies'
        ]);
        // Posts::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima vel sequi non saepe veritatis optio, molestiae blanditiis. Atque harum unde consequuntur reprehenderit soluta eveniet iusto incidunt deserunt dolore. Voluptatem, repellendus!',
        //     'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, dolorem corrupti! Voluptas praesentium, laboriosam culpa ullam excepturi eius quae consectetur, ratione ipsum possimus minima est ad ipsam voluptate! Facere, cumque.',
        //     'category_id'=> 1,
        //     'user_id'=> 1

        // ]);
        
        // Posts::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima vel sequi non saepe veritatis optio, molestiae blanditiis. Atque harum unde consequuntur reprehenderit soluta eveniet iusto incidunt deserunt dolore. Voluptatem, repellendus!',
        //     'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, dolorem corrupti! Voluptas praesentium, laboriosam culpa ullam excepturi eius quae consectetur, ratione ipsum possimus minima est ad ipsam voluptate! Facere, cumque.',
        //     'category_id'=> 2,
        //     'user_id'=> 2

        // ]);
        
        // Posts::create([
        //     'title'=>'Judul ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima vel sequi non saepe veritatis optio, molestiae blanditiis. Atque harum unde consequuntur reprehenderit soluta eveniet iusto incidunt deserunt dolore. Voluptatem, repellendus!',
        //     'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, dolorem corrupti! Voluptas praesentium, laboriosam culpa ullam excepturi eius quae consectetur, ratione ipsum possimus minima est ad ipsam voluptate! Facere, cumque.',
        //     'category_id'=> 3,
        //     'user_id'=> 1

        // ]);
///*manual sampe sisni////


        // Posts::create([
        //     'name'=>'ridwan',
        //     'email'=>'ridwan@gmail.com',
        //     'password'=>bcrypt('123456')
        // ]);

        // Posts::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima vel sequi non saepe veritatis optio, molestiae blanditiis. Atque harum unde consequuntur reprehenderit soluta eveniet iusto incidunt deserunt dolore. Voluptatem, repellendus!'
        // ]);
        // \App\Models\User::factory(10)->create();
    }
}
