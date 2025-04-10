<?php
namespace App\Services;

use App\DTO\PetDTO;
use App\Models\Category;
use App\Repositories\PetRepository;

class PetService
{
    public function __construct(
        private PetRepository $petRepository
    ) {}

    public function getAllPets()
    {
        return $this->petRepository->getAllPets();
    }

    public function getPetById(int $id)
    {
        return $this->petRepository->getPetById($id);
    }

    public function getPetsByCategory(Category $category)
    {
        return $this->petRepository->getPetsByCategory($category);
    }
}