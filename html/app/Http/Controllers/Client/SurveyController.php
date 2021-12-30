<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\SurveyServiceInterface;

class SurveyController extends Controller
{
    private $surveyService;

    public function __construct(
        SurveyServiceInterface $surveyService
    ) {
        $this->surveyService = $surveyService;
    }

    public function init(Request $request)
    {
        $id = $this->surveyService->init();
        return redirect()->route('survey.new', $id);
    }

    public function new(Request $request, $id)
    {
        $calculatedData = $this->surveyService->calculateNextQuestions($id);
        return view('client.survey')->with('calculatedData', $calculatedData)
            ->with('currentPage', 'survey')
            ->with('id', $id);
    }

    public function next(Request $request, $id)
    {
        $this->surveyService->handleAnswers($request->except(['_token']), $id);
        return redirect()->route('survey.new', $id);
    }
}
