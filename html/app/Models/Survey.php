<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id'
    ];

    public function answers()
    {
        return $this->belongsToMany(Answer::class)->withTimestamps();
    }
}
