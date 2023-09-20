<?php

namespace App\Http\Controllers;

use App\Services\IPostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

	public function __construct(IPostService $postService)
	{
		$this->postService = $postService;
	}

    public function index()
    {
        return $this->postService->getAll();
    }

    public function store(Request $request)
    {
        return $this->postService->store($request->all());
    }
}
