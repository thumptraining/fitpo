<?php

namespace Database\Seeders;

use App\Models\Blog\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Bíceps',
            'slug' => 'biceps',
        ]);

        Tag::create([
            'name' => 'Tríceps',
            'slug' => 'triceps',
        ]);

        Tag::create([
            'name' => 'Cardio',
            'slug' => 'cardio',
        ]);
    }
}
