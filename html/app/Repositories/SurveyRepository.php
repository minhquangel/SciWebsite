<?php

namespace App\Repositories;

use App\Models\Survey;
use Bosnadev\Repositories\Eloquent\Repository;
use Illuminate\Support\Facades\DB;

class SurveyRepository extends Repository
{
    public function model()
    {
        return Survey::class;
    }

    public function allSurveyData($columns)
    {
        return DB::table('surveys')
            ->join('answer_survey','answer_survey.survey_id','=','surveys.id')
            ->join('answers','answers.id','=','answer_survey.answer_id')
            ->join('questions','questions.id','=','answers.question_id')
            ->select($columns)
            ->get();
    }

    public function answersWithQuestion($surveyId, $questionCode, $answersCode)
    {
        return DB::table('surveys')
            ->select(['answers.code'])
            ->join('answer_survey','answer_survey.survey_id','=','surveys.id')
            ->join('answers','answers.id','=','answer_survey.answer_id')
            ->join('questions','questions.id','=','answers.question_id')
            ->where([
                'questions.code' => $questionCode,
                'surveys.id' => $surveyId
            ])
            ->whereIn('answers.code', $answersCode)
            ->get();
    }

    public function lastQuestionAnswered($surveyId)
    {
        return DB::table('surveys')
            ->select(['questions.code'])
            ->join('answer_survey','answer_survey.survey_id','=','surveys.id')
            ->join('answers','answers.id','=','answer_survey.answer_id')
            ->join('questions','questions.id','=','answers.question_id')
            ->where([
                'surveys.id' => $surveyId
            ])
            ->orderBy('answer_survey.id', 'desc')
            ->first();
    }

    public function surveyResult($surveyId, $columns)
    {
        return DB::table('surveys')
            ->join('answer_survey','answer_survey.survey_id','=','surveys.id')
            ->join('answers','answers.id','=','answer_survey.answer_id')
            ->join('questions','questions.id','=','answers.question_id')
            ->where([
                'surveys.id' => $surveyId
            ])
            ->select($columns)
            ->get();
    }

    public function totalScore($surveyId)
    {
        $columns = [
            'surveys.id as surveyId',
            'questions.id as questionId',
            'questions.code as questionCode',
            'questions.content as questionContent',
            'answers.id as answerId',
            'answers.code as answerCode',
            'answers.score as answerScore',
            'answers.content as answerContent',
            'answer_survey.created_at as answerCreatedAt'
        ];

        return DB::table('surveys')
            ->join('answer_survey','answer_survey.survey_id','=','surveys.id')
            ->join('answers','answers.id','=','answer_survey.answer_id')
            ->join('questions','questions.id','=','answers.question_id')
            ->where([
                'surveys.id' => $surveyId
            ])
            ->select($columns)
            ->get();

//        return DB::table('surveys')
//            ->join('answer_survey','answer_survey.survey_id','=','surveys.id')
//            ->join('answers','answers.id','=','answer_survey.answer_id')
//            ->where([
//                'surveys.id' => $surveyId
//            ])
//            ->sum('answers.score');
    }
}
