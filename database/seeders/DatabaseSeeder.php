<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(App::Environment('local')) {
            $this->call(DevSeeder::class);
        }

        if(App::Environment('production')) {
            $this->call(ProdSeeder::class);
        }
    }
}
