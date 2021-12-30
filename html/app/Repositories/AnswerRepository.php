<?php

namespace App\Repositories;

use App\Models\Answer;
use Bosnadev\Repositories\Eloquent\Repository;

class AnswerRepository extends Repository
{
    public function model()
    {
        return Answer::class;
    }
}
