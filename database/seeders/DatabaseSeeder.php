<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Website;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Website::factory()
            ->has(Post::factory()->count(10), 'posts')
            ->create();

        Website::factory()
            ->has(Post::factory()->count(10), 'posts')
            ->create();

        Website::factory()
            ->has(Post::factory()->count(10), 'posts')
            ->create();
    }
}
