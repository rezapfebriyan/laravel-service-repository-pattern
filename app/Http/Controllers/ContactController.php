<?php

namespace App\Http\Controllers;

use App\Services\IContactService;

class ContactController extends Controller
{
    protected $contactService;

	public function __construct(IContactService $contactService)
	{
		$this->contactService = $contactService;
	}

    public function index()
    {
        return $this->contactService->getAll();
    }
    
    public function show($id)
    {
        return $this->contactService->getById($id);
    }
}
