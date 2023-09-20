<?php

namespace App\Services;

interface IContactService 
{
    public function getAll();
    public function getById(int $id);
}