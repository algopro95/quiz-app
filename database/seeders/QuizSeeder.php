<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::create([
            'question' => 'pertanyaan 1',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'a',
            'score' => 10,
            'created_at' => '2023-11-26 03:05:56',
            'updated_at' => '2023-11-26 03:05:56',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 2',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'b',
            'score' => 10,
            'created_at' => '2023-11-26 03:06:24',
            'updated_at' => '2023-11-26 03:06:24',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 3',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'c',
            'score' => 10,
            'created_at' => '2023-11-26 03:06:47',
            'updated_at' => '2023-11-26 03:06:47',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 4',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'd',
            'score' => 10,
            'created_at' => '2023-11-26 04:15:31',
            'updated_at' => '2023-11-26 04:15:31',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 5',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'a',
            'score' => 10,
            'created_at' => '2023-11-26 07:23:50',
            'updated_at' => '2023-11-26 07:23:50',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 6',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'b',
            'score' => 10,
            'created_at' => '2023-11-26 07:23:50',
            'updated_at' => '2023-11-26 07:23:50',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 7',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'c',
            'score' => 10,
            'created_at' => '2023-11-26 07:23:50',
            'updated_at' => '2023-11-26 07:23:50',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 8',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'd',
            'score' => 10,
            'created_at' => '2023-11-26 07:23:50',
            'updated_at' => '2023-11-26 07:23:50',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 9',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'a',
            'score' => 10,
            'created_at' => '2023-11-26 07:25:14',
            'updated_at' => '2023-11-26 07:25:14',
        ]);

        Quiz::create([
            'question' => 'pertanyaan 10',
            'a' => 'jawaban a',
            'b' => 'jawaban b',
            'c' => 'jawaban c',
            'd' => 'jawaban d',
            'answer' => 'b',
            'score' => 10,
            'created_at' => '2023-11-26 07:25:14',
            'updated_at' => '2023-11-26 07:25:14',
        ]);
    }
}