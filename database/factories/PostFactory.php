<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)), //mt_random min 2,max 8
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            //cara 1 : pake implode
            //'body' => '<p>'.implode('</p><p>',$this->faker->paragraphs(mt_rand(5, 10))).'</p>',//paragraph(mt_rand(5, 10)),
            //cara 2,collet adalah membuat aray biasa menjadi collect, dan pake map
            // 'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
            //     ->map(function ($p) {
            //         return "<p>$p</p>";
            //     }),
            //cara 3,function dirubah menjadi fn
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
            ->map(fn ($p) =>"<p>$p</p>")    
            ->implode(''),

            'user_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
