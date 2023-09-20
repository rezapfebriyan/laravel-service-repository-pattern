<?php

namespace App\Repositories;

interface IPostRepository
{
    public function getAll();
    public function store(array $data);
}