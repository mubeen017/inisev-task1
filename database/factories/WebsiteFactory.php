<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Website>
 */
class WebsiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'domain' => $this->faker->domainName,
            'tile' => $this->faker->text(30),
            'description' => $this->faker->text(150),
            'user_id' => User::factory(),
        ];
    }
}
