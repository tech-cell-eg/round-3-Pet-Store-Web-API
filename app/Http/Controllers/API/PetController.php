<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\PetService;
use App\DTOs\PetDTO ;
use App\Http\Controllers\ApiController;
use App\Http\Resources\PetResource;
use App\Models\Category;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends ApiController
{
    public function __construct(protected PetService $petService) {}

    public function index()
    {
        return ApiController::successResponse([
            'data'=>PetResource::collection($this->petService->getAllPets()),
            'message'=>'Pet feched  successfully',
        ]);
       
       
    }

    public function show(Pet $pet)
    {
       
        
        return ApiController::successResponse([
            'data'=>new PetResource($pet),
            'message'=>'Pet feched  successfully',
        ]);
        
       
    }

    public function getByCategory(Category $category)
    {
        $pets = $this->petService->getPetsByCategory($category);
        return PetResource::collection($pets);
    }
}
