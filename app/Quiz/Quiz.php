<?php

/**
 * ���������� ��� �������
 *
 * Created by PhpStorm.
 * User: Hovhannisyan
 * Date: 31.10.2015
 * Time: 13:42
 */

//todo: amen User-i hamar mta&el vor konkret et harcin patasxana& chlini, ete mi qani hat harc lini sxala ashxatelu, mek el quiz-i himikva ID-in settingsneric vercni

use Illuminate\Database\Capsule\Manager as Capsule;

class Quiz
{
    private $_question;
    private $_answers = array();
    private $_quizId;
    private $_userId;
    private $_model;
    private $_totalResponses;

    /**
     * ������������� ID �����������
     * @param mixed $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->_userId = $userId;
        return $this;
    }

    /**
     * ���������� ������
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->_question;
    }

    /**
     * ����������� ������
     * @return array
     */
    public function getAnswers()
    {
        return $this->_answers;
    }

    /**
     * ������������� ID ������
     * @param mixed $quizId
     * @return $this
     */
    public function setQuizId($quizId)
    {
        $this->_quizId = $quizId;
        return $this;
    }

    /**
     * ��������� �� �������� �� �� ������ ������� �����������
     * @return bool
     */
    public function isAnswered()
    {
        return (bool) QuizResponsesModel::whereQuiz_id($this->_quizId)->whereUser_id($this->_userId)->first();
    }

    /**
     * ���������� ����������� ������� ��� ������� ������
     * @param $responsesCount
     * @return float
     */
    public function getPercent($responsesCount)
    {
        return round(100 * $responsesCount / ($this->_totalResponses ? $this->_totalResponses : 1), 1);
    }

    /**
     * ��������� ������ ������ ������
     * @param $id
     */
    public function addResponse($id)
    {
        try{
            // Транзакция для Записание данных в базу
            Capsule::connection()->transaction(function() use ($id){
                // ���������� �� +1 ����� ���������� ������
                $this->_model->total_responses = $this->_totalResponses + 1;

                // ���������� �� +1 ����� ���������� �������
                $modelAnswer = QuizAnswerModel::find($id);
                $modelAnswer->responses_count = $this->_answers[$id]['count'] + 1;

                $this->_model->save();
                $modelAnswer->save();

                // ��������� ������ ������
                QuizResponsesModel::create([
                    'user_id' => $this->_userId,
                    'quiz_id' => $this->_quizId,
                    'quiz_answer_id' => $id
                ]);
            });
        }catch (Exception $e){

        }
        // ��������� �������
        $this->find();
    }

    /**
     * ������ �� ���� ������ ������
     * @return $this
     */
    public function find()
    {
        $this->_model = QuizModel::find($this->_quizId);

        $this->_question = $this->_model->question();
        $answers = $this->_model->answers()->get();

        // �������� ����� ���������� �������
        $this->_totalResponses = $this->_model->total_responses;

        foreach ($answers as $a) {
            $this->_answers[$a->id]['title'] = $a->title();
            $this->_answers[$a->id]['count'] = $a->responses_count;
            $this->_answers[$a->id]['percent'] = $this->getPercent($a->responses_count);
        }

        return $this;
    }
}