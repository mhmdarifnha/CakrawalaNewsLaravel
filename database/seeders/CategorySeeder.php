<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'blue'
        ]);

        Category::factory()->create([
            'name' => 'Korupsi',
            'slug' => 'korupsi',
            'color' => 'red'
        ]);

        Category::factory()->create([
            'name' => 'Teknologi',
            'slug' => 'teknologi',
            'color' => 'indigo'
        ]);

        Category::factory()->create([
            'name' => 'Smartphone Gaming',
            'slug' => 'smartphone-gaming',
            'color' => 'green'
        ]);

        Category::factory()->create([
            'name' => 'Resep Masakan',
            'slug' => 'resep-masakan',
            'color' => 'yellow'
        ]);

    }
}
