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
                'size' => '200x90x80 cm',
                'image'=>'products/Product1.jpg'
            ],
            [
                'name' => 'Bed Frame',
                'category_name' => 'Bedden',
                'price' => 499.50,
                'size' => '180x200 cm',
                 'image'=>'products/Product2.jpg'
            ],
           
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
    
}
