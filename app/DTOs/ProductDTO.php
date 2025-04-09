<?php
namespace App\DTOs;

class ProductDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $category_name,
        public readonly float $price,
        public readonly ?string $size
    ) {}
}