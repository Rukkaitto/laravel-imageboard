<?php

namespace Database\Seeders;

use App\Models\Board;
use Illuminate\Database\Seeder;

class ProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Board::create([
            'id' => 'b',
            'name' => 'Random',
        ]);
        Board::create([
            'id' => 'g',
            'name' => 'Technology',
        ]);
        Board::create([
            'id' => 'v',
            'name' => 'Video Games',
        ]);
        Board::create([
            'id' => 'a',
            'name' => 'Anime & Manga',
        ]);
    }
}
