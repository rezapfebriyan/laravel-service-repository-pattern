<?php

namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //* property untuk nampung data dari repository
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        //! isi property dengan data hasil import an
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        //* call method getAll yg didalam repository
        $contact = $this->contactRepository->getAll();
        
        return $contact;
    }
    
    public function show($id)
    {
        //* call method getById yg didalam repository
        $contact = $this->contactRepository->getById($id);

        return $contact;
    }
}
