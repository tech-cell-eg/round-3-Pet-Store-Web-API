<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pets = [
            [
                'name' => 'Pomeranian',
                'description' => 'Fluffy and energetic small dog breed',
                'color' => 'Orange',
                'category_id' => 1, // Small Dogs
                'gender' => 'male',
                'age' => 2,
                'price' => 1200.00,
                'is_popular' => true,
            ],
           
          
            [
                'name' => 'Golden Retriever',
                'description' => 'Intelligent and friendly family dog',
                'color' => 'Golden',
                'category_id' => 3, // Large Dogs
                'gender' => 'female',
                'age' => 4,
                'price' => 1500.00,
                'is_popular' => true,
            ],
            
        ];

        foreach ($pets as $pet) {
            Pet::create($pet);
        }

    }
}
