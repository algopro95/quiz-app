<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Quiz;
use App\Repositories\QuizRepository;
use Illuminate\Http\Request;
use Flash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuizzesImport;

class QuizController extends AppBaseController
{
    /** @var QuizRepository $quizRepository*/
    private $quizRepository;

    public function __construct(QuizRepository $quizRepo)
    {
        $this->quizRepository = $quizRepo;
    }

    /**
     * Display a listing of the Quiz.
     */
    public function index(Request $request)
    {
        $quizzes = $this->quizRepository->paginate(10);

        return view('quizzes.index')
            ->with('quizzes', $quizzes);
    }

    /**
     * Show the form for creating a new Quiz.
     */
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created Quiz in storage.
     */
    public function store(CreateQuizRequest $request)
    {
        $input = $request->all();

        $quiz = $this->quizRepository->create($input);

        Flash::success('Quiz saved successfully.');

        return redirect(route('quizzes.index'));
    }

    /**
     * Display the specified Quiz.
     */
    public function show($id)
    {
        $quiz = $this->quizRepository->find($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('quizzes.index'));
        }

        return view('quizzes.show')->with('quiz', $quiz);
    }

    /**
     * Show the form for editing the specified Quiz.
     */
    public function edit($id)
    {
        $quiz = $this->quizRepository->find($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('quizzes.index'));
        }

        return view('quizzes.edit')->with('quiz', $quiz);
    }

    /**
     * Update the specified Quiz in storage.
     */
    public function update($id, UpdateQuizRequest $request)
    {
        $quiz = $this->quizRepository->find($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('quizzes.index'));
        }

        $quiz = $this->quizRepository->update($request->all(), $id);

        Flash::success('Quiz updated successfully.');

        return redirect(route('quizzes.index'));
    }

    /**
     * Remove the specified Quiz from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $quiz = $this->quizRepository->find($id);

        if (empty($quiz)) {
            Flash::error('Quiz not found');

            return redirect(route('quizzes.index'));
        }

        $this->quizRepository->delete($id);

        Flash::success('Quiz deleted successfully.');

        return redirect(route('quizzes.index'));
    }



    public function importQuizData(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,txt',
        ]);
        
        try {
            Excel::import(new QuizzesImport(), $request->file('excel_file'));
            Flash::success('Data imported successfully!');
            return redirect('/quizzes');
        } catch (\Exception $e) {
            Flash::error('Error importing data: ' . $e->getMessage());
            return redirect('/quizzes');
        }
    }
}
