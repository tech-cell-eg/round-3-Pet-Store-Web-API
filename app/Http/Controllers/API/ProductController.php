<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Services\ProductService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
class ProductController extends Controller
{
    public function __construct(private ProductService $productService)
    {
    }

    public function index(): AnonymousResourceCollection
    {
        $products = $this->productService->getAllProducts();
        return ProductResource::collection($products);
    }
  
}
