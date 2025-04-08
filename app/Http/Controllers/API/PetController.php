<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\PetService;
use App\DTOs\PetDTO ;
use App\Http\Resources\PetResource;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function __construct(protected PetService $petService) {}

    public function index()
    {
        return PetResource::collection($this->petService->getAllPets());
       
    }

    public function show(int $id)
    {
        $pet = $this->petService->getPetById($id);
        
        if (!$pet) {
            return response()->json(['message' => 'Pet not found'], 404);
        }
        
        return new PetResource($pet);
    }

    public function getByCategory(int $categoryId)
    {
        $pets = $this->petService->getPetsByCategory($categoryId);
        return PetResource::collection($pets);
    }
}
