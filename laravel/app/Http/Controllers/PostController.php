<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }
    
    public function store(StorePostRequest $request)
    {
        return Post::create($request->all());
    }

    public function getRandomPost($limit = 1)
    {
        return Post::inRandomOrder()->limit($limit)->get();
    }

}
