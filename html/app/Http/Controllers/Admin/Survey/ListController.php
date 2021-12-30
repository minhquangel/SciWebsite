<?php

namespace App\Http\Controllers\Admin\Survey;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\SurveyServiceInterface;

class ListController extends Controller
{
    private $surveyService;

    public function __construct(
        SurveyServiceInterface $surveyService
    ) {
        $this->middleware('auth');
        $this->surveyService = $surveyService;
    }

    public function index(Request $request)
    {
        $surveys = $this->surveyService->list();
        return view('admin.survey.index')->with('surveys', $surveys);
    }
}
