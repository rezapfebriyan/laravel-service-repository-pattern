<?php

namespace App\Services;

interface IPostService
{
    public function getAll();
    public function store(array $data);
}