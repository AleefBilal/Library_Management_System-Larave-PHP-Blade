<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Accounting']);
        Category::create(['name' => 'Business Administration']);
        Category::create(['name' => 'Business Management']);
        Category::create(['name' => 'Computer Science']);
        Category::create(['name' => 'Economics']);
        Category::create(['name' => 'Literature']);
        Category::create(['name' => 'Law']);
        Category::create(['name' => 'Marketing Management']);
        Category::create(['name' => 'Mathematics']);
        
    }
}
