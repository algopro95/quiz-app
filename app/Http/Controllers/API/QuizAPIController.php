<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateQuizAPIRequest;
use App\Http\Requests\API\UpdateQuizAPIRequest;
use App\Models\Quiz;
use App\Repositories\QuizRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class QuizAPIController
 */
class QuizAPIController extends AppBaseController
{
    private QuizRepository $quizRepository;

    public function __construct(QuizRepository $quizRepo)
    {
        $this->quizRepository = $quizRepo;
    }

    /**
     * Display a listing of the Quizzes.
     * GET|HEAD /quizzes
     */
    public function index(Request $request): JsonResponse
    {
        $quizzes = $this->quizRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($quizzes->toArray(), 'Quizzes retrieved successfully');
    }

    /**
     * Store a newly created Quiz in storage.
     * POST /quizzes
     */
    public function store(CreateQuizAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $quiz = $this->quizRepository->create($input);

        return $this->sendResponse($quiz->toArray(), 'Quiz saved successfully');
    }

    /**
     * Display the specified Quiz.
     * GET|HEAD /quizzes/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Quiz $quiz */
        $quiz = $this->quizRepository->find($id);

        if (empty($quiz)) {
            return $this->sendError('Quiz not found');
        }

        return $this->sendResponse($quiz->toArray(), 'Quiz retrieved successfully');
    }

    /**
     * Update the specified Quiz in storage.
     * PUT/PATCH /quizzes/{id}
     */
    public function update($id, UpdateQuizAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Quiz $quiz */
        $quiz = $this->quizRepository->find($id);

        if (empty($quiz)) {
            return $this->sendError('Quiz not found');
        }

        $quiz = $this->quizRepository->update($input, $id);

        return $this->sendResponse($quiz->toArray(), 'Quiz updated successfully');
    }

    /**
     * Remove the specified Quiz from storage.
     * DELETE /quizzes/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Quiz $quiz */
        $quiz = $this->quizRepository->find($id);

        if (empty($quiz)) {
            return $this->sendError('Quiz not found');
        }

        $quiz->delete();

        return $this->sendSuccess('Quiz deleted successfully');
    }
}
