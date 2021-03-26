<?php

namespace Database\Seeders;

use App\Models\PostImage;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            PostImageSeeder::class,
        ]);
    }
}
