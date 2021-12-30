<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'question_id', 'code','content'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function surveys ()
    {
        return $this->belongsToMany(Survey::class)->withTimestamps();
    }
}
