<?php

namespace App\Services\Client;

use App\Repositories\AnswerRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\SurveyRepository;

class SurveyService implements SurveyServiceInterface
{
    private $answerRepository;
    private $questionRepository;
    private $surveyRepository;

    public function __construct(
        AnswerRepository $answerRepository,
        QuestionRepository $questionRepository,
        SurveyRepository $surveyRepository
    ) {
        $this->answerRepository = $answerRepository;
        $this->questionRepository = $questionRepository;
        $this->surveyRepository = $surveyRepository;
    }

    public function init()
    {
        $id = uniqid();
        $this->surveyRepository->create([
            'id' => $id
        ]);

        return $id;
    }

    public function calculateNextQuestions($id)
    {
        $survey = $this->surveyRepository->find($id);

        if (empty($survey)) {
            abort(404);
        }

        if ($survey->answers->count() === 0) {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q83', 'Q1']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q1')
            && $this->answersWithQuestion($id, 'Q83', ['2']))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q79', 'Q81']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q81')
            && $this->answersWithQuestion($id, 'Q81', ['1']))
        {
            return [
                'questions' => [],
                'status' => 2,
                'total_score' => 0,
                'message' => 'Sorry, we cannot help you.  You do not have a chance of getting a U.S. visa.'
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q81')
            && $this->answersWithQuestion($id, 'Q79', ['1']))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q80']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->answersWithQuestion($id, 'Q1', ['1'])) {
            return $this->handleStudentBlock($id);
        }

        if ($this->answersWithQuestion($id, 'Q1', ['2'])) {
            return $this->handleTouristBussinessBlock($id);
        }
        
    }

    private function handleStudentBlock($id)
    {
        if ($this->lastQuestionAnswered($id, 'Q80')
            || ($this->lastQuestionAnswered($id, 'Q1')
            && $this->answersWithQuestion($id, 'Q83', ['1']))
            || ($this->lastQuestionAnswered($id, 'Q81')
            && $this->answersWithQuestion($id, 'Q79', ['2'])))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q2', 'Q7']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q2') 
			|| $this->lastQuestionAnswered($id, 'Q7'))
        {
            if ($this->answersWithQuestion($id, 'Q2', ['1'])) {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q28', 'Q87']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if ($this->answersWithQuestion($id, 'Q2', ['2'])) {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q28', 'Q88', 'Q89']),
                    'status' => 1,
                    'message' => null
                ];
            }


            if ($this->answersWithQuestion($id, 'Q2', ['3']) || $this->answersWithQuestion($id, 'Q2', ['4'])) {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q90', 'Q28']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if ($this->answersWithQuestion($id, 'Q2', ['5'])) {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q90', 'Q28']),
                    'status' => 1,
                    'message' => null
                ];
            }
        }

        if ($this->lastQuestionAnswered($id, 'Q87') 
            || $this->lastQuestionAnswered($id, 'Q89') 
            || $this->lastQuestionAnswered($id, 'Q90') 
            || $this->lastQuestionAnswered($id, 'Q28'))
        {
            if ($this->answersWithQuestion($id, 'Q2', ['5']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q3']),
                    'status' => 1,
                    'message' => null
                ];
            }

            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q3']),
                'status' => 1,
                'message' => null
            ];
        }
		
		if ($this->lastQuestionAnswered($id, 'Q3')
			|| $this->lastQuestionAnswered($id, 'Q4'))
		{
			if ($this->lastQuestionAnswered($id, 'Q3') 
				&& $this->answersWithQuestion($id, 'Q3', ['1']))
			{
				return [
					'questions' => $this->questionRepository->whereCodeIn(['Q4']),
					'status' => 1,
					'message' => null
				];
			}
			else
			{
				return [
					'questions' => $this->questionRepository->whereCodeIn(['Q13']),
					'status' => 1,
					'message' => null
				];
			}
					

		}

        if ($this->lastQuestionAnswered($id, 'Q13'))
        {
            if ($this->answersWithQuestion($id, 'Q13', ['2']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q14']),
                    'status' => 1,
                    'message' => null
                ];
            }
        }

        return $this->handleParentsOfStudentsBlock($id);
    }

    private function handleParentsOfStudentsBlock($id)
    {
        if ($this->lastQuestionAnswered($id, 'Q3')
			|| $this->lastQuestionAnswered($id, 'Q4')
			|| $this->lastQuestionAnswered($id, 'Q13')
			|| $this->lastQuestionAnswered($id, 'Q14'))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q71', 'Q73']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q73'))
        {
            if ($this->answersWithQuestion($id, 'Q73', ['1']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q65']),
                    'status' => 1,
                    'message' => null
                ];
            }

            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q64']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q65_10'))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q64']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q64')
            && $this->answersWithQuestion($id, 'Q64', ['1']))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q74', 'Q66']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q66')
            && $this->answersWithQuestion($id, 'Q66', ['1']))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q67']),
                'status' => 1,
                'message' => null
            ];
        }

        return $this->handleRelativesInTheUSBlock($id);
    }

    private function handleTouristBussinessBlock($id)
    {
        if ($this->lastQuestionAnswered($id, 'Q80')
            || ($this->lastQuestionAnswered($id, 'Q1')
            && $this->answersWithQuestion($id, 'Q83', ['1']))
            || ($this->lastQuestionAnswered($id, 'Q81')
            && $this->answersWithQuestion($id, 'Q79', ['2'])))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q9', 'Q44']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q44'))
        {
            if ($this->answersWithQuestion($id, 'Q44', ['1']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q10', 'Q77', 'Q78']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if ($this->answersWithQuestion($id, 'Q44', ['2, 3, 4']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q10', 'Q53']),
                    'status' => 1,
                    'message' => null
                ];
            }

            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q45']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q53'))
        {
            if ($this->answersWithQuestion($id, 'Q53', ['3, 4, 5, 8, 13']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q60']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if ($this->answersWithQuestion($id, 'Q53', ['6']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q55', 'Q56']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if ($this->answersWithQuestion($id, 'Q53', ['9, 10']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q54']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if ($this->answersWithQuestion($id, 'Q53', ['11']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q58', 'Q59']),
                    'status' => 1,
                    'message' => null
                ];
            }

            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q45']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q60'))
        {
            if ($this->answersWithQuestion($id, 'Q60', ['1']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q63']),
                    'status' => 1,
                    'message' => null
                ];
            }

            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q45']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q63')
            || $this->lastQuestionAnswered($id, 'Q56')
            || $this->lastQuestionAnswered($id, 'Q54')
            || $this->lastQuestionAnswered($id, 'Q59'))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q45']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q45'))
        {
            if ($this->answersWithQuestion($id, 'Q45', ['3']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q52', 'Q46']),
                    'status' => 1,
                    'message' => null
                ];
            }

            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q46']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q46')
            && $this->answersWithQuestion($id, 'Q46', ['1']))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q47', 'Q48']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q48')
            && $this->answersWithQuestion($id, 'Q48', ['2', '3', '4']))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q50', 'Q51']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->answersWithQuestion($id, 'Q46', ['1'])
            && ($this->lastQuestionAnswered($id, 'Q48')
                || $this->lastQuestionAnswered($id, 'Q51')))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q49']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q46')
            || $this->lastQuestionAnswered($id, 'Q48')
            || $this->lastQuestionAnswered($id, 'Q51')
            || $this->lastQuestionAnswered($id, 'Q49'))
        {
            if (($this->answersWithQuestion($id, 'Q44', ['1', '2', '3', '4'])
                && ($this->answersWithQuestion($id, 'Q9', ['1', '3'])
					|| $this->answersWithQuestion($id, 'Q53', ['10', '11', '12'])))
				|| $this->lastQuestionAnswered($id, 'Q49'))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q25', 'Q27']),
                    'status' => 1,
                    'message' => null
                ];
            }

            /*if ($this->lastQuestionAnswered($id, 'Q25'))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q27']),
                    'status' => 1,
                    'message' => null
                ];
            }*/
        }

        return $this->handlePriorTravelBlock($id);
    }

    private function handlePriorTravelBlock($id)
    {
        if ($this->lastQuestionAnswered($id, 'Q31'))
        {
            if ($this->answersWithQuestion($id, 'Q31', ['1']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q30']),
                    'status' => 1,
                    'message' => null
                ];
            }
        }
		if ($this->lastQuestionAnswered($id, 'Q30_10'))
		    return $this->handleRelativesInTheUSBlock($id);

        //if ($this->lastQuestionAnswered($id, 'Q30_10'))
        //{
        //    return $this->handleRelativesInTheUSBlock($id);
        //}

		if ($this->lastQuestionAnswered($id, 'Q18') && $this->answersWithQuestion($id, 'Q18', ['1']))
		{
			if($this->answersWithQuestion($id, 'Q18', ['1']))
			{
				return [
					'questions' => $this->questionRepository->whereCodeIn(['Q20', 'Q31']),
					'status' => 1,
					'message' => null
				];	
			}
		}
		if($this->lastQuestionAnswered($id, 'Q46') || $this->lastQuestionAnswered($id, 'Q25') || $this->lastQuestionAnswered($id, 'Q27'))
		{
			return [
					'questions' => $this->questionRepository->whereCodeIn(['Q18']),
					'status' => 1,
					'message' => null
				];

		}
		
		return $this->handleRelativesInTheUSBlock($id);
    }

    private function handleRelativesInTheUSBlock($id)
    {
        if ($this->lastQuestionAnswered($id, 'Q66')
            || $this->lastQuestionAnswered($id, 'Q67_11')
            || $this->lastQuestionAnswered($id, 'Q30_10')
            || ($this->lastQuestionAnswered($id, 'Q64') && $this->answersWithQuestion($id, 'Q64', ['2']))
            || ($this->lastQuestionAnswered($id, 'Q31') && $this->answersWithQuestion($id, 'Q31', ['2']))
			|| $this->lastQuestionAnswered($id, 'Q18')
			|| $this->lastQuestionAnswered($id, 'Q31')
			|| $this->lastQuestionAnswered($id, 'Q30')
			)
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q5']),
                'status' => 1,
                'message' => null
            ];
        }

		//dd($this->surveyRepository->lastQuestionAnswered($id));
	
		if ($this->lastQuestionAnswered($id, 'Q5')
			&& $this->answersWithQuestion($id, 'Q5', ['1']))
		{
			//dd($this->surveyRepository->lastQuestionAnswered($id));
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q86']),
                'status' => 1,
                'message' => null
            ];
		}

        if ($this->answersWithQuestion($id, 'Q5', ['2']))
        {	
			//dd($this->surveyRepository->lastQuestionAnswered($$id));
	        //return [
            //    'questions' => $this->questionRepository->whereCodeIn(['Q86']),
            //    'status' => 1,
            //    'message' => null
            //];
			$final_score = $this->totalScore($id);
			$final_message = "";
			if($final_score < 15)
				$final_message = "Hiện tại, khả năng nhận visa của bạn tương đối thấp. Chúng tôi khuyến nghị bạn tạm hoãn chuyến đi và dành thời gian củng cố hồ sơ. Nếu vẫn muốn nộp hồ sơ, bạn có thể sử dụng gói dịch vụ Cơ bản của chúng tôi.";
			
            return [
               'questions' => [],
               'status' => 2,
               'total_score' => $final_score,
               'message' => $final_message
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q86'))
        {
            if($this->answersWithQuestion($id, 'Q86', ['2']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q84', 'Q17', 'Q38']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if($this->answersWithQuestion($id, 'Q86', ['1']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q33', 'Q39']),
                    'status' => 1,
                    'message' => null
                ];
            }

            if($this->answersWithQuestion($id, 'Q86', ['3']))
            {
                return [
                    'questions' => $this->questionRepository->whereCodeIn(['Q34', 'Q40']),
                    'status' => 1,
                    'message' => null
                ];
            }

            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q35', 'Q41']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q33')
            && $this->answersWithQuestion($id, 'Q33', [1]))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q32']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q34')
            && $this->answersWithQuestion($id, 'Q34', [1]))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q36']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q35')
            && $this->answersWithQuestion($id, 'Q35', [1]))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q37']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q38')
            && $this->answersWithQuestion($id, 'Q38', [1]))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q42']),
                'status' => 1,
                'message' => null
            ];
        }



        if (($this->lastQuestionAnswered($id, 'Q39')
			|| $this->lastQuestionAnswered($id, 'Q40')
			|| $this->lastQuestionAnswered($id, 'Q41'))
            && $this->answersWithQuestion($id, 'Q40', [1]))
        {
            return [
                'questions' => $this->questionRepository->whereCodeIn(['Q43']),
                'status' => 1,
                'message' => null
            ];
        }

        if ($this->lastQuestionAnswered($id, 'Q39')
			|| $this->lastQuestionAnswered($id, 'Q40')
			|| $this->lastQuestionAnswered($id, 'Q41')
            || $this->lastQuestionAnswered($id, 'Q43')
			|| $this->lastQuestionAnswered($id, 'Q42')
			|| ($this->lastQuestionAnswered($id, 'Q38') && ($this->answersWithQuestion($id, 'Q38', [2]) || $this->answersWithQuestion($id, 'Q38', [3])
															|| $this->answersWithQuestion($id, 'Q38', [4]) || $this->answersWithQuestion($id, 'Q38', [5]))
				)
			)
        {
            /*return [
                'questions' => [],
                'status' => 2,
                'total_score' => $this->totalScore($id),
                'message' => 'We thank you for your time spent taking this survey. Your response has been recorded.'
            ];*/
			
			$final_score = $this->totalScore($id);
			$final_message = "";
			if($final_score < 15)
				$final_message = "Hiện tại, khả năng nhận visa của bạn tương đối thấp. Chúng tôi khuyến nghị bạn tạm hoãn chuyến đi và dành thời gian củng cố hồ sơ. Nếu vẫn muốn nộp hồ sơ lúc này, bạn có thể sử dụng dịch vụ Cơ bản của chúng tôi.";
			
            return [
               'questions' => [],
               'status' => 2,
               'total_score' => $final_score,
               'message' => $final_message
            ];
        }
    }

    public function handleAnswers($answerDatas, $id)
    {
        $survey = $this->surveyRepository->find($id);

        if (empty($survey)) {
            abort(404);
        }

        foreach ($answerDatas as $questionId => $answerId)
        {
            $answer = $this->answerRepository
                ->findWhere(['id' => $answerId, 'question_id' => $questionId])->first();

            if (empty($answer)) {
                abort(404);
            }

            $survey->answers()->attach($answer);
        }

        return $survey;
    }

    private function lastQuestionAnswered($surveyId, $questionCode)
    {
        $question = $this->surveyRepository->lastQuestionAnswered($surveyId);

        if ($question->code === $questionCode) {
            return true;
        }

        return false;
    }

    private function answersWithQuestion($surveyId, $questionCode, $answersCode)
    {
        $answer = $this->surveyRepository->answersWithQuestion($surveyId, $questionCode, $answersCode);

        if ($answer->first()) {
            return true;
        }

        return false;
    }

	private function get74($answerList)
	{
		$q74_0 = $this->getAnswer($answerList, 'Q74_0');
		$q74_1 = $this->getAnswer($answerList, 'Q74_1');
		$q74_2 = $this->getAnswer($answerList, 'Q74_2');
		$q74_3 = $this->getAnswer($answerList, 'Q74_3');
		$q74_4 = $this->getAnswer($answerList, 'Q74_4');
		$q74_5 = $this->getAnswer($answerList, 'Q74_5');
		$q74_6 = $this->getAnswer($answerList, 'Q74_6');
		$q74_7 = $this->getAnswer($answerList, 'Q74_7');
		$q74_8 = $this->getAnswer($answerList, 'Q74_8');
		$q74_9 = $this->getAnswer($answerList, 'Q74_9');
		$q74_10 = $this->getAnswer($answerList, 'Q74_10');
		return $q74_0->answerScore + $q74_1->answerScore + $q74_2->answerScore + $q74_3->answerScore + $q74_4->answerScore +
				$q74_5->answerScore + $q74_6->answerScore + $q74_7->answerScore + $q74_8->answerScore + $q74_9->answerScore + $q74_10->answerScore;
	}

	private function get65($answerList)
	{
		$q65_0 = $this->getAnswer($answerList, 'Q65_0');
		$q65_1 = $this->getAnswer($answerList, 'Q65_1');
		$q65_2 = $this->getAnswer($answerList, 'Q65_2');
		$q65_3 = $this->getAnswer($answerList, 'Q65_3');
		$q65_4 = $this->getAnswer($answerList, 'Q65_4');
		$q65_5 = $this->getAnswer($answerList, 'Q65_5');
		$q65_6 = $this->getAnswer($answerList, 'Q65_6');
		$q65_7 = $this->getAnswer($answerList, 'Q65_7');
		$q65_8 = $this->getAnswer($answerList, 'Q65_8');
		$q65_9 = $this->getAnswer($answerList, 'Q65_9');
		$q65_10 = $this->getAnswer($answerList, 'Q65_10');
		return $q65_0->answerScore + $q65_1->answerScore + $q65_2->answerScore + $q65_3->answerScore + $q65_4->answerScore +
				$q65_5->answerScore + $q65_6->answerScore + $q65_7->answerScore + $q65_8->answerScore + $q65_9->answerScore + $q65_10->answerScore;
	}

	private function get20($answerList)
	{
		$q20_0 = $this->getAnswer($answerList, 'Q20_0');
		$q20_1 = $this->getAnswer($answerList, 'Q20_1');
		$q20_2 = $this->getAnswer($answerList, 'Q20_2');
		$q20_3 = $this->getAnswer($answerList, 'Q20_3');
		$q20_4 = $this->getAnswer($answerList, 'Q20_4');
		$q20_5 = $this->getAnswer($answerList, 'Q20_5');
		$q20_6 = $this->getAnswer($answerList, 'Q20_6');
		$q20_7 = $this->getAnswer($answerList, 'Q20_7');
		$q20_8 = $this->getAnswer($answerList, 'Q20_8');
		$q20_9 = $this->getAnswer($answerList, 'Q20_9');
		$q20_10 = $this->getAnswer($answerList, 'Q20_10');
		return $q20_0->answerScore + $q20_1->answerScore + $q20_2->answerScore + $q20_3->answerScore + $q20_4->answerScore +
				$q20_5->answerScore + $q20_6->answerScore + $q20_7->answerScore + $q20_8->answerScore + $q20_9->answerScore + $q20_10->answerScore;
	}

	private function get30($answerList)
	{
		$q30_0 = $this->getAnswer($answerList, 'Q30_0');
		$q30_1 = $this->getAnswer($answerList, 'Q30_1');
		$q30_2 = $this->getAnswer($answerList, 'Q30_2');
		$q30_3 = $this->getAnswer($answerList, 'Q30_3');
		$q30_4 = $this->getAnswer($answerList, 'Q30_4');
		$q30_5 = $this->getAnswer($answerList, 'Q30_5');
		$q30_6 = $this->getAnswer($answerList, 'Q30_6');
		$q30_7 = $this->getAnswer($answerList, 'Q30_7');
		$q30_8 = $this->getAnswer($answerList, 'Q30_8');
		$q30_9 = $this->getAnswer($answerList, 'Q30_9');
		$q30_10 = $this->getAnswer($answerList, 'Q30_10');
		return $q30_0->answerScore + $q30_1->answerScore + $q30_2->answerScore + $q30_3->answerScore + $q30_4->answerScore +
				$q30_5->answerScore + $q30_6->answerScore + $q30_7->answerScore + $q30_8->answerScore + $q30_9->answerScore + $q30_10->answerScore;
	}

	private function get67($answerList)
	{
		$q67_0 = $this->getAnswer($answerList, 'Q67_0');
		$q67_1 = $this->getAnswer($answerList, 'Q67_1');
		$q67_2 = $this->getAnswer($answerList, 'Q67_2');
		$q67_3 = $this->getAnswer($answerList, 'Q67_3');
		$q67_4 = $this->getAnswer($answerList, 'Q67_4');
		$q67_5 = $this->getAnswer($answerList, 'Q67_5');
		$q67_6 = $this->getAnswer($answerList, 'Q67_6');
		$q67_7 = $this->getAnswer($answerList, 'Q67_7');
		$q67_8 = $this->getAnswer($answerList, 'Q67_8');
		$q67_9 = $this->getAnswer($answerList, 'Q67_9');
		$q67_10 = $this->getAnswer($answerList, 'Q67_10');
		$q67_11 = $this->getAnswer($answerList, 'Q67_11');
		return $q67_0->answerScore + $q67_1->answerScore + $q67_2->answerScore + $q67_3->answerScore + $q67_4->answerScore +
				$q67_5->answerScore + $q67_6->answerScore + $q67_7->answerScore + $q67_8->answerScore + $q67_9->answerScore + $q67_10->answerScore + $q67_11->answerScore;
	}
	
    private function totalScore($surveyId)
    {
        $answerList = $this->surveyRepository->totalScore($surveyId);
        $q1 = $this->getAnswer($answerList, 'Q1');
		$score = 0;
        if ($q1->answerCode == 1) // student
        {
			$q2 = $this->getAnswer($answerList, 'Q2');
			if($q2->answerCode == 1 || $q2->answerCode == 2)  // minor student
			{
				$q88 = $this->getAnswer($answerList, 'Q88'); // current school
				$score = $score + $q88->answerScore;
				
				$q89 = $this->getAnswer($answerList, 'Q89'); // future school
				$score = $score + $q89->answerScore;
				
				$q3 = $this->getAnswer($answerList, 'Q3'); // scholarship
				if($q3->answerCode == 1)
				{
					$q4 = $this->getAnswer($answerList, 'Q4');
					$score = $score + $q4->answerScore;				
				}
				
				$q7 = $this->getAnswer($answerList, 'Q7'); // English ability
				if($q7->answerScore < 0)
					$score = $score + $q7->answerScore;
				
				$q13 = $this->getAnswer($answerList, 'Q13'); // stay with relative
				$score = $score + $q13->answerScore;
				if($q13->answerCode == 2)
				{
					$q14 = $this->getAnswer($answerList, 'Q14'); // stay with Vietnamese host
					$score = $score + $q14->answerScore;	
				}
				
				//--------
				$relative_score = 0;
				$q5 = $this->getAnswer($answerList, 'Q5');
				$relative_score = $relative_score + $q5->answerScore;
				
				if($q5->answerCode == 1)
				{
					$q86 = $this->getAnswer($answerList, 'Q86');
					$relative_score = $relative_score + $q86->answerScore;
					if($q86->answerCode == 1)
					{
						$q33 = $this->getAnswer($answerList, 'Q33');
						$relative_score = $relative_score + $q33->answerScore;
						
						$q39 = $this->getAnswer($answerList, 'Q39');
						$relative_score = $relative_score + $q39->answerScore;
						
						if($q33->answerCode == 1)
						{
							$q32 = $this->getAnswer($answerList, 'Q32');
							$relative_score = $relative_score + $q32->answerScore;						
						}	
					}
					else if($q86->answerCode == 2)
					{
						$q17 = $this->getAnswer($answerList, 'Q17');
						$relative_score = $relative_score + $q17->answerScore;
						
						$q38 = $this->getAnswer($answerList, 'Q38');
						$relative_score = $relative_score + $q38->answerScore;
						
						
						
						if($q38->answerCode == 1)
						{
							$q42 = $this->getAnswer($answerList, 'Q42');
							$relative_score = $relative_score + $q42->answerScore;
						}
					}
					else if($q86->answerCode == 3)
					{
						$q34 = $this->getAnswer($answerList, 'Q34');
						$relative_score = $relative_score + $q34->answerScore;
						
						$q40 = $this->getAnswer($answerList, 'Q40');
						$relative_score = $relative_score + $q40->answerScore;
						
						if($q34->answerCode == 1)
						{
							$q36 = $this->getAnswer($answerList, 'Q36');
							$relative_score = $relative_score + $q36->answerScore;						
						}
						if($q40->answerCode == 1)
						{
							$q43 = $this->getAnswer($answerList, 'Q43');
							$relative_score = $relative_score + $q43->answerScore;						
						}
					}
					else if($q86->answerCode == 4)
					{
						$q35 = $this->getAnswer($answerList, 'Q35');
						$relative_score = $relative_score + $q35->answerScore;
						
						$q41 = $this->getAnswer($answerList, 'Q41');
						$relative_score = $relative_score + $q41->answerScore;
						
						if($q35->answerCode == 1)
						{
							$q37 = $this->getAnswer($answerList, 'Q37');
							$relative_score = $relative_score + $q37->answerScore;						
						}							
					}
				}
				if($relative_score < 0)
					$relative_score = 0;
				else if($relative_score > 10)
					$relative_score = 10;
				$score = $relative_score;
				
				//--------
				$q71 = $this->getAnswer($answerList, 'Q71'); // parents 
				$score = $score + $q71->answerScore;

				$q73 = $this->getAnswer($answerList, 'Q73'); // parents 
				$score = $score + $q73->answerScore;
				
				if($q73->answerCode == 1)
				{
					$q65 = $this->getAnswer($answerList, 'Q65'); // parents 
					$score = $score + $this->get65($answerList);
				}
				
				$q64 = $this->getAnswer($answerList, 'Q64'); // prior travel
				$score = $score + $q64->answerScore;

				if($q64->answerCode == 1)
				{
					$q74 = $this->getAnswer($answerList, 'Q74'); // prior travel
					$score = $score + $this->get74($answerList);
					
					$q66 = $this->getAnswer($answerList, 'Q66'); // prior travel
					$score = $score + $q66->answerScore;
					
					if($q66->answerCode == 1)
					{
						$q67 = $this->getAnswer($answerList, 'Q67'); // prior travel
						$score = $score + $this->get67($answerList);					
					}
				}
				
				if($score <= 0)
					$score = 1;
				else if($score > 90)
					$score = 90;
			}
			else if($q2->answerCode == 4 || $q2->answerCode == 3) // bachelor or associate
			{
				$q90 = $this->getAnswer($answerList, 'Q90'); // are they curently in university in Vietnam?
				$score = $score + $q90->answerScore;
				
				if($q90->answerCode == 1) // the university in Vietnam have a exchange program with a university in U.S.?
				{
					$q91 = $this->getAnswer($answerList, 'Q91');
					$score = $score + $q91->answerScore;					
				}

				$q3 = $this->getAnswer($answerList, 'Q3'); // scholarship
				if($q3->answerCode == 1)
				{
					$q4 = $this->getAnswer($answerList, 'Q4'); // scholarship
					$score = $score + $q4->answerScore;				
				}
				
				
				$q7 = $this->getAnswer($answerList, 'Q7'); // English ability
				if($q7->answerScore < 0)
					$score = $score + $q7->answerScore;


				
				
				$q13 = $this->getAnswer($answerList, 'Q13');// staying with relative?
				$score = $score + $q13->answerScore;
				if($q13->answerCode == 2)
				{
					$q14 = $this->getAnswer($answerList, 'Q14');
					$score = $score + $q14->answerScore;	
				}
				

				$q71 = $this->getAnswer($answerList, 'Q71'); // parents 
				$score = $score + $q71->answerScore;

				$q73 = $this->getAnswer($answerList, 'Q73'); // parents 
				$score = $score + $q73->answerScore;
				
				if($q73->answerCode == 1)
				{
					$q65 = $this->getAnswer($answerList, 'Q65'); // parents 
					$score = $score + $this->get65($answerList);
				}

				// relative
				$relative_score = 0;
				$q5 = $this->getAnswer($answerList, 'Q5');
				$relative_score = $relative_score + $q5->answerScore;
				
				if($q5->answerCode == 1)
				{
					$q86 = $this->getAnswer($answerList, 'Q86');
					$relative_score = $relative_score + $q86->answerScore;
					if($q86->answerCode == 1)
					{
						$q33 = $this->getAnswer($answerList, 'Q33');
						$relative_score = $relative_score + $q33->answerScore;
						
						$q39 = $this->getAnswer($answerList, 'Q39');
						$relative_score = $relative_score + $q39->answerScore;
						
						if($q33->answerCode == 1)
						{
							$q32 = $this->getAnswer($answerList, 'Q32');
							$relative_score = $relative_score + $q32->answerScore;						
						}	
					}
					else if($q86->answerCode == 2)
					{
						$q17 = $this->getAnswer($answerList, 'Q17');
						$relative_score = $relative_score + $q17->answerScore;
						
						$q38 = $this->getAnswer($answerList, 'Q38');
						$relative_score = $relative_score + $q38->answerScore;
						
						
						
						if($q38->answerCode == 1)
						{
							$q42 = $this->getAnswer($answerList, 'Q42');
							$relative_score = $relative_score + $q42->answerScore;
						}
					}
					else if($q86->answerCode == 3)
					{
						$q34 = $this->getAnswer($answerList, 'Q34');
						$relative_score = $relative_score + $q34->answerScore;
						
						$q40 = $this->getAnswer($answerList, 'Q40');
						$relative_score = $relative_score + $q40->answerScore;
						
						if($q34->answerCode == 1)
						{
							$q36 = $this->getAnswer($answerList, 'Q36');
							$relative_score = $relative_score + $q36->answerScore;						
						}
						if($q40->answerCode == 1)
						{
							$q43 = $this->getAnswer($answerList, 'Q43');
							$relative_score = $relative_score + $q43->answerScore;						
						}
					}
					else if($q86->answerCode == 4)
					{
						$q35 = $this->getAnswer($answerList, 'Q35');
						$relative_score = $relative_score + $q35->answerScore;
						
						$q41 = $this->getAnswer($answerList, 'Q41');
						$relative_score = $relative_score + $q41->answerScore;
						
						if($q35->answerCode == 1)
						{
							$q37 = $this->getAnswer($answerList, 'Q37');
							$relative_score = $relative_score + $q37->answerScore;						
						}							
					}
				}
				if($relative_score < 0)
					$relative_score = 0;
				else if($relative_score > 10)
					$relative_score = 10;
				$score = $relative_score;

				
				$q64 = $this->getAnswer($answerList, 'Q64');
				$score = $score + $q64->answerScore;

				if($q64->answerCode == 1)
				{
					$q74 = $this->getAnswer($answerList, 'Q74');
					$score = $score + $this->get74($answerList);
					
					$q66 = $this->getAnswer($answerList, 'Q66');
					$score = $score + $q66->answerScore;
					
					if($q66->answerCode == 1)
					{
						$q67 = $this->getAnswer($answerList, 'Q67');
						$score = $score + $this->get67($answerList);					
					}
				}
				
				$q28 = $this->getAnswer($answerList, 'Q28');
				$score = $score + $q28->answerScore;
				
				$q83 = $this->getAnswer($answerList, 'Q83'); // 
				if($q83->answerCode == 2)
				{
					$q79 = $this->getAnswer($answerList, 'Q79'); // refusal 
					$score = $score + $q79->answerScore;				
				}
				
				if($score <= 0)
					$score = 1;
				else if($score > 90)
					$score = 90;
			}
			else
			{
				$isScholarShip = false;
				$q3 = $this->getAnswer($answerList, 'Q3');
				if($q3->answerCode == 1)
					$isScholarShip = true;
				
				foreach ($answerList as $answer)
				{
					if($isScholarShip && $answer->answerScore < 0)
						continue;
					$score = $score + $answer->answerScore;
				}
				if($score < 50)
					$score = $score + 20;
				
				if($score > 90)
					$score = 90;
			}
		}
		else
		{
			$q44 = $this->getAnswer($answerList, 'Q44'); // age
			$score = $score + $q44->answerScore;
			
			if($q44->answerCode == 5)
			{
				$q45 = $this->getAnswer($answerList, 'Q45'); // marital status
				$score = $score + $q45->answerScore;
				
				if($q45->answerCode == 3)
				{	
					$q52 = $this->getAnswer($answerList, 'Q52'); // marital status
					$score = $score + $q52->answerScore;	
				}

				$children = 0;
				$q46 = $this->getAnswer($answerList, 'Q46'); //
				if($q46->answerCode == 1)
				{
					$q47 = $this->getAnswer($answerList, 'Q47'); //
					$children = $children + $q47->answerScore;
					
					$q48 = $this->getAnswer($answerList, 'Q48'); //
					$children = $children + $q48->answerScore;
					
					if($q48->answerCode == 2 || $q48->answerCode == 3 || $q48->answerCode == 4)
					{
						$q50 = $this->getAnswer($answerList, 'Q50');
						$children = $children + $q50->answerScore;
						
						$q51 = $this->getAnswer($answerList, 'Q51');
						$children = $children + $q51->answerScore;						
					}
				}
				
				if($children > 0)
					$score = $score + $children;
				
				$prior_travel = 0;
				$q18 = $this->getAnswer($answerList, 'Q18'); //
				$prior_travel = $prior_travel + $q18->answerScore;
				if($q18->answerCode == 1)
				{
					$q20 = $this->getAnswer($answerList, 'Q20'); //
					$prior_travel = $prior_travel + $this->get20($answerList);
				}
				
				if($prior_travel > 20)
					$prior_travel = 20;
				
				$q83 = $this->getAnswer($answerList, 'Q83'); //
				if($q83->answerCode == 2)
				{
					$q79 = $this->getAnswer($answerList, 'Q79'); //
					$score = $score + $q79->answerScore;				
				}
			}
			else 
			{
				foreach ($answerList as $answer)
				{
					$score = $score + $answer->answerScore;
				}
				
				if($q44->answerCode == 1)
				{
					$q18 = $this->getAnswer($answerList, 'Q18'); 
					if($q18->answerCode == 2)
						$score = $score + 10;
				}
			}
				if($score <= 0)
					$score = 1;
				else if($score > 100)
					$score = 100;			
		}
		return $score;
		//$x = $this->getAnswer($answerList, 'Q7');
		//$y = $this->getAnswer($answerList, 'Q28');
		//return $score;
        //dd($x);
	
//        foreach ($answerList as $answer)
//        {
//            dd
//        }
//
//
//
//        return $this->surveyRepository->totalScore($surveyId);
    }

//    private function getSumIgnore($answerList, $answersCode)
//    {
//        $sum = 0;
//
//        foreach ($answerList as $answer)
//        {
//            $sum = $sum + $answer->answerScore;
//        }
//
//        return $sum;
//    }

    public function getAnswer($answerList, $questionCode)
    {
        foreach ($answerList as $answer)
        {
            if ($answer->questionCode == $questionCode)
            {
                return $answer;
            }
        }
        return null;
    }
}
