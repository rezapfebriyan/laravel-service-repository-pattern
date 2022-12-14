<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postReposotory = $postRepository;
    }

    public function getAll()
    {
        return $this->postReposotory->getAll();
    }
}