<?php

namespace App\Services;


use App\DTOs\ProductDTO ;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductService
{
    public function getAllProducts()
    {
        $products = Product::all();
        
        return $products;
    }
}