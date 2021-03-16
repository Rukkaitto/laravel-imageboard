<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Post;
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
        Board::factory()
            ->count(15)
            ->has(Post::factory()->count(100))
            ->create();
    }
}
