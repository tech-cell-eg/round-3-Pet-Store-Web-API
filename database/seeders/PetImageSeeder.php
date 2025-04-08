<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\PetImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $pets = Pet::all();
        $imagePaths = [
            'pets/pomeranian1.jpg',//for small dog1
            'pets/pomeranian2.jpg',//for small dog1
           
            'pets/golden1.jpg',//for large dog
            'pets/golden2.jpg',////for large dog
        ];

        $imageIndex = 0;
        
        foreach ($pets as $pet) {
            // Add 2 images for each pet
            for ($i = 0; $i < 2; $i++) {
                if ($imageIndex >= count($imagePaths)) {
                    $imageIndex = 0;
                }
                
                PetImage::create([
                    'pet_id' => $pet->id,
                    'image_path' => $imagePaths[$imageIndex]
                ]);
                
                $imageIndex++;
            }
        }

    }
}
