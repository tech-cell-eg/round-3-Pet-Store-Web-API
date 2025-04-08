<?php

// app/Repositories/PetRepository.php

namespace App\Repositories;

use App\DTO\PetDTO;
use App\Mappers\PetMapper;
use App\Models\Pet;
use App\Repositories\Interfaces\PetRepositoryInterface;

class PetRepository 
{
    public function getAllPets()
    {
        $pets = Pet::with('images')->get();
        
        return $pets;
    }

    public function getPetById(int $id)
    {
        $pet = Pet::with('images')->find($id);
        
        return $pet ??  null;
    }

    public function getPetsByCategory(int $categoryId)
    {
        $pets = Pet::with('images')
            ->where('category_id', $categoryId)
            ->get();
            
        return $pets;
    }
}