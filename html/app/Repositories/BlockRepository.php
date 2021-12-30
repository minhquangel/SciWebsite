<?php

namespace App\Repositories;

use App\Models\Block;
use Bosnadev\Repositories\Eloquent\Repository;

class BlockRepository extends Repository
{
    public function model()
    {
        return Block::class;
    }
}