<?php
namespace App\Services\Admin;

interface SurveyServiceInterface
{
    public function list();
    public function allSurveyData();
    public function find($id);
}
