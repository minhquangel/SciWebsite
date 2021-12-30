<?php
namespace App\Services\Client;

interface SurveyServiceInterface
{
    public function init();
    public function calculateNextQuestions($id);
    public function handleAnswers($answerDatas, $id);
}
