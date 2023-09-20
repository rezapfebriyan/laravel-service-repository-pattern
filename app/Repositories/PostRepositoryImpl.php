<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepositoryImpl implements IPostRepository
{
    public function getAll()
    {
        return Post::get();
    }

    public function store(array $data)
    {
        return Post::create($data);
    }
}