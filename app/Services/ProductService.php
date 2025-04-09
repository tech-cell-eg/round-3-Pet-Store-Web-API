<?php

namespace App\Services;


use App\DTOs\ProductDTO ;
use App\Models\Product;

class ProductService
{
    public function getAllProducts(): array
    {
        $products = Product::all();
        
        return $products->map(function ($product) {
            return new ProductDTO(
                $product->name,
                $product->category_name,
                $product->price,
                $product->size
            );
        })->toArray();
    }
}