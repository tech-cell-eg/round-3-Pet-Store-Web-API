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
        $categories = [
            ['name' => 'Small Dogs'],
            ['name' => 'Medium Dogs'],
            ['name' => 'Large Dogs'],
            ['name' => 'Cats'],
            ['name' => 'Birds'],
            ['name' => 'Reptiles'],
            ['name' => 'Small Mammals'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
