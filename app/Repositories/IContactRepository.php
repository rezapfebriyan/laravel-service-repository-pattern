<?php

namespace App\Repositories;

interface IContactRepository
{
    public function getAll();
    public function getById(int $id);
}