<?php

namespace App\Services\Admin;

use App\Repositories\SurveyRepository;

class SurveyService implements SurveyServiceInterface
{
    private $surveyRepository;

    public function __construct(
        SurveyRepository $surveyRepository
    ) {
        $this->surveyRepository = $surveyRepository;
    }

    public function list()
    {
        return $this->surveyRepository->all();
    }

    public function find($id)
    {
        $columns = [
            'surveys.id as surveyId',
            'questions.id as questionId',
            'questions.code as questionCode',
            'questions.content as questionContent',
            'answers.id as answerId',
            'answers.code as answerCode',
            'answers.content as answerContent',
            'answer_survey.created_at as answerCreatedAt'
        ];

        $surveyAnswers = $this->surveyRepository->surveyResult($id, $columns);
        $answerArray = json_decode($surveyAnswers, true);
        return $this->rebuildData($answerArray);
    }

    public function allSurveyData()
    {
        $columns = [
            'surveys.id as surveyId',
            'questions.id as questionId',
            'questions.code as questionCode',
            'questions.content as questionContent',
            'answers.id as answerId',
            'answers.code as answerCode',
            'answers.content as answerContent',
            'answer_survey.created_at as answerCreatedAt'
        ];
        $surveyAnswers = $this->surveyRepository->allSurveyData($columns);
        $answerArray = json_decode($surveyAnswers, true);
        return $this->rebuildAllData($answerArray);
    }

    private function rebuildAllData($answerArray) {
        $result = array();

        foreach($answerArray as $answer) {
            if(array_key_exists('surveyId', $answer)){
                $result[$answer['surveyId']]['id'] = $answer['surveyId'];
                $result[$answer['surveyId']]['questions'][$answer['questionId']]['id'] = $answer['questionId'];
                $result[$answer['surveyId']]['questions'][$answer['questionId']]['code'] = $answer['questionCode'];
                $result[$answer['surveyId']]['questions'][$answer['questionId']]['content'] = $answer['questionContent'];
                $result[$answer['surveyId']]['questions'][$answer['questionId']]['answers'][$answer['answerId']]['id'] = $answer['answerId'];
                $result[$answer['surveyId']]['questions'][$answer['questionId']]['answers'][$answer['answerId']]['code'] = $answer['answerCode'];
                $result[$answer['surveyId']]['questions'][$answer['questionId']]['answers'][$answer['answerId']]['content'] = $answer['answerContent'];
                $result[$answer['surveyId']]['questions'][$answer['questionId']]['answers'][$answer['answerId']]['created_at'] = $answer['answerCreatedAt'];
            }
        }

        return $result;
    }

    private function rebuildData($answerArray) {
        $result = array();

        foreach($answerArray as $answer) {
            if(array_key_exists('questionId', $answer)){
                $result['id'] = $answer['surveyId'];
                $result['questions'][$answer['questionId']]['id'] = $answer['questionId'];
                $result['questions'][$answer['questionId']]['code'] = $answer['questionCode'];
                $result['questions'][$answer['questionId']]['content'] = $answer['questionContent'];
                $result['questions'][$answer['questionId']]['answers'][$answer['answerId']]['id'] = $answer['answerId'];
                $result['questions'][$answer['questionId']]['answers'][$answer['answerId']]['code'] = $answer['answerCode'];
                $result['questions'][$answer['questionId']]['answers'][$answer['answerId']]['content'] = $answer['answerContent'];
                $result['questions'][$answer['questionId']]['answers'][$answer['answerId']]['created_at'] = $answer['answerCreatedAt'];
            }
        }

        return $result;
    }
}
