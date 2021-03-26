<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // Delete database's data before fill it using => php artisan db:seed
        Category::truncate();

        Category::factory(5)->create();
    }
}
