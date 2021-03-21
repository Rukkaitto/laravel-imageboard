<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Board::factory()->count(10)->create()->each(function ($board) {
            $board->posts()->saveMany(Post::factory()->count(10)->make())->each(function ($thread) {
                $thread->replies()->saveMany(Post::factory()->count(10)->make())->each(function ($reply) {
                    $reply->quoters()->saveMany(Post::factory()->count(2)->make());
                });
            });
        });
    }
}
