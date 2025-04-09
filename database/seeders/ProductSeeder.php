<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Living Room Sofa',
                'category_name' => 'Woonkamer',
                'price' => 899.99,
                'size' => '200x90x80 cm'
            ],
            [
                'name' => 'Bed Frame',
                'category_name' => 'Bedden',
                'price' => 499.50,
                'size' => '180x200 cm'
            ],
            [
                'name' => 'Dining Table',
                'category_name' => 'Eetkamer',
                'price' => 650.00,
                'size' => '160x90 cm'
            ],
            [
                'name' => 'Table Lamp',
                'category_name' => 'Lampen',
                'price' => 45.99,
                'size' => '30x30x50 cm'
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
    
}
