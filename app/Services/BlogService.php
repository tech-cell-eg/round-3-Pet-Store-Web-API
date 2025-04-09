<?php

namespace App\Services;

use App\DTO\BlogDTO;
use App\Models\Blog;

class BlogService
{
    public function getAllBlogs()
    {
        return $blogs = Blog::all();
    }
        
       

   
}