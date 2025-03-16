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
            'slug' => 'web-development'
        ]);

        Category::factory()->create([
            'name' => 'Korupsi',
            'slug' => 'korupsi'
        ]);

        Category::factory()->create([
            'name' => 'Teknologi',
            'slug' => 'teknologi'
        ]);

        Category::factory()->create([
            'name' => 'Smartphone Gaming',
            'slug' => 'smartphone-gaming'
        ]);

        Category::factory()->create([
            'name' => 'Resep Masakan',
            'slug' => 'resep-masakan'
        ]);

    }
}
