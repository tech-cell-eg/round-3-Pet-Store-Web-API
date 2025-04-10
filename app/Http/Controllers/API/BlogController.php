<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BlogResource;
use App\Services\BlogService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
class BlogController extends Controller
{
    public function __construct(private BlogService $blogService)
    {
    }

    public function index()
    {
        $blogs = $this->blogService->getAllBlogs();
        return BlogResource::collection($blogs);
    }
}
