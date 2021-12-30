<?php

namespace App\Services\Client;

use App\Repositories\BlogRepository;

class BlogService implements BlogServiceInterface
{
    private $blogRepository;

    public function __construct(
        BlogRepository $blogRepository
    ) {
        $this->blogRepository = $blogRepository;
    }

    public function list()
    {
        return $this->blogRepository->all();
    }

    public function find($id)
    {
        return $this->blogRepository->find($id);
    }
}
