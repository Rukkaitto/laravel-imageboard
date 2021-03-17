<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Reply;
use App\Models\Thread;
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
        Board::factory()->count(10)->create()->each(function ($board) {
            $board->threads()->createMany(Thread::factory()->count(10)->make()->toArray())->each(function ($thread) {
                $thread->replies()->createMany(Reply::factory()->count(10)->make()->toArray())->each(function ($reply) {
                    $reply->quotes()->createMany(Reply::factory()->count(2)->make()->toArray());
                    $reply->quoting()->createMany(Reply::factory()->count(2)->make()->toArray());
                });
            });
        });
    }
}
