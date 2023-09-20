<?php

namespace App\Services;

use App\Repositories\IContactRepository;

class ContactServiceImpl implements IContactService
{
    protected $contactRepository;

    public function __construct(IContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getAll()
    {
        return $this->contactRepository->getAll();
    }

    public function getById(int $id)
    {
        return $this->contactRepository->getById($id);
    }
}