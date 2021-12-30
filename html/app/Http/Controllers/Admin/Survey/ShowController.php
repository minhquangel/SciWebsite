<?php

namespace App\Http\Controllers\Admin\Survey;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\SurveyServiceInterface;

class ShowController extends Controller
{
    private $surveyService;

    public function __construct(
        SurveyServiceInterface $surveyService
    ) {
        $this->middleware('auth');
        $this->surveyService = $surveyService;
    }

    public function show(Request $request, $id)
    {
        $survey = $this->surveyService->find($id);
        if (empty($survey)) { abort(404); }
        return view('admin.survey.show')->with('survey', $survey);
    }
}
