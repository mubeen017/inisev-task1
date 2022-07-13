<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Website;
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
            'website_id' => Website::factory(),
            'title' => $this->faker->text(30),
            'body' => $this->faker->text(250),
            'status' => Post::STATUS_PUBLISHED,
        ];
    }
}
