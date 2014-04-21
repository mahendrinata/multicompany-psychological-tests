<?php

class ConclusionSingleTest extends ConclusionPsychologyTest {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    private function __getData($user_test_id) {
        $sql = 'SELECT variables.id AS variable_id, SUM(answers.value) AS value 
            FROM user_tests 
            INNER JOIN test_answers ON user_tests.id = test_answers.user_test_id 
            INNER JOIN answers ON answers.id = test_answers.answer_id 
            INNER JOIN variables ON variables.id = answers.variable_id
            WHERE user_tests.id = ' . $user_test_id . ' 
            GROUP BY variables.id 
            ORDER BY value DESC';

        return $this->_calculateVariable($sql);
    }

    public function generate($user_test_id) {
        $userTestModel = $this->_getUserTest($user_test_id);

        $i = 0;
        $slug = array();
        foreach ($this->__getData($userTestModel->id) as $variable) {
            $this->_saveVariable($user_test_id, $variable);

            if ($i < $userTestModel->test->combination_variable) {
                $slug[] = $variable->variable_id;
            }
            $i++;
        }

        $userTestModel->variable_detail_slug = implode('-', $slug);
        return $userTestModel->save();
    }

}

?>