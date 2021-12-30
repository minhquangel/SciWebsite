<?php

namespace App\Repositories;

use App\Models\Question;
use Bosnadev\Repositories\Eloquent\Repository;

class QuestionRepository extends Repository
{
    public function model()
    {
        return Question::class;
    }

    public function whereCodeIn($array, $columns = array('*'))
    {
        return $this->model->whereIn('code', $array)->select($columns)->with('answers')->get();
    }
}