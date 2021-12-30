<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'code', 'title'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
