<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampleImages = [
            'customers/customer1.jpg',
        ];

        // Create 5 customers with only image fields populated
        foreach ($sampleImages as $image) {
            Customer::create([
                'image' => 'customers/' . $image
            ]);
        }
    }
}
