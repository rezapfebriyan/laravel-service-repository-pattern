<?php

namespace App\Repositories;

use App\Models\Post;

//TODO       :::     HANYA UNTUK PROSES QUERY CRUD SAJA     :::

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

    //*      ::    Bussines logic for store data    ::

    public function store($data)
    {
        $post = new $this->post;

        $post->title = $data['title'];
        $post->description = $data['description'];

        $post->save();

        return $post->fresh();
    }
}