<?php

namespace App\Repositories;

use App\Models\Quiz;
use App\Repositories\BaseRepository;

class QuizRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'question',
        'a',
        'b',
        'c',
        'd',
        'answer',
        'score'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Quiz::class;
    }
}
