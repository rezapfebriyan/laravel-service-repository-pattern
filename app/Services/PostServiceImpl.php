<?php

namespace App\Services;

use App\Repositories\IPostRepository;
use Exception;

class PostServiceImpl implements IPostService
{
    protected $postRepository;

    public function __construct(IPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->postRepository->getAll();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }

    public function store($data)
    {
        $result = ['status' => 201];
        
        try {
            $result['data'] = $this->postRepository->store($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }
}