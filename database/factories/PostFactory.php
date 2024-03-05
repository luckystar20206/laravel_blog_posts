<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tittle'=> $this->faker->sentence(mt_rand(2,8)),
            'slug'=> $this->faker->slug(),
            'excerpt'=> $this->faker->paragraph(),
            'body'=> $this->faker->paragraph(mt_rand(5,10)),
            'category_id'=> mt_rand(1,2),
            'user_id'=> mt_rand(1,3)
        ];
    }
}
