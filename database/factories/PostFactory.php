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

    /**
     * Préciser la façon dont un post est usiné
     */
    public function definition()
    {
        return [
            'description' => "My kitty purrs! :)",
            'img_url' => $this->faker->imageUrl(640, 480, 'cats'),
            'user_id' => 1
        ];
    }
}
