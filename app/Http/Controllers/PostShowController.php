<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
        return PostResource::make($post);
    }
}
