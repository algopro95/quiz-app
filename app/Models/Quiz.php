<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quiz extends Model
{
    public $table = 'quizzes';

    public $fillable = [
        'question',
        'a',
        'b',
        'c',
        'd',
        'answer',
        'score'
    ];

    protected $casts = [
        'question' => 'string',
        'a' => 'string',
        'b' => 'string',
        'c' => 'string',
        'd' => 'string',
        'answer' => 'string',
        'score' => 'string'
    ];

    public static array $rules = [
        'question' => 'required',
        'a' => 'required',
        'b' => 'required',
        'c' => 'required',
        'd' => 'required',
        'answer' => 'required',
        'score' => 'required'
    ];
    
}
