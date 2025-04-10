<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Getting Started with Laravel',
                'description' => 'A comprehensive guide to starting your Laravel journey',
                'image' => 'blogs/blog1.jpg'
            ],
           
          
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
    
}
