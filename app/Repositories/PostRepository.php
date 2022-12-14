<?php

namespace App\Repositories;

use App\Models\Post;

//TODO       :::     HANYA UNTUK PROSES CRUD SAJA     :::

class PostRepository
{

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    //*      ::    Bussines logic for get list data    ::

    public function getAll()
    {
        return $this->post->get();
    }

}