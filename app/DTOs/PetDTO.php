<?php


namespace App\DTOs;

class PetDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public string $color,
        public int $category_id,
        public string $gender,
        public int $age,
        public float $price,
        public bool $is_popular
    ) {}
}
