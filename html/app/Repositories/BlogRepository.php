<?php

namespace App\Repositories;

use App\Models\Blog;
use Bosnadev\Repositories\Eloquent\Repository;

class BlogRepository extends Repository
{
    public function model()
    {
        return Blog::class;
    }
}