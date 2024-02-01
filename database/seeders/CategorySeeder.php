<?php

namespace Database\Seeders;

use App\Models\Blog\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Recipes',
            'slug' => 'recipes',
        ]);

        Category::create([
            'name' => 'Running',
            'slug' => 'running',
        ]);

        Category::create([
            'name' => 'Fitness',
            'slug' => 'fitness',
        ]);

       
    }
}
