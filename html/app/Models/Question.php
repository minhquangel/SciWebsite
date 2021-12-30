<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'block_id', 'code', 'content'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function subQuestions()
    {
        return $this->hasMany(Question::class, 'parent_id', 'id');
    }
}
