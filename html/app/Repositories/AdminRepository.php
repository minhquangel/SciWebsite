<?php

namespace App\Repositories;

use App\Models\Admin;
use Bosnadev\Repositories\Eloquent\Repository;

class AdminRepository extends Repository
{
    public function model()
    {
        return Admin::class;
    }
}