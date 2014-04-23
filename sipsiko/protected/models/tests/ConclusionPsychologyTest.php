<?php

class ConclusionPsychologyTest extends Conclusion {

    public $userTestModel;
    public $testModel;

    public function setUserTestModel($userTestModel) {
        $this->userTestModel = $userTestModel;
        $this->setTestModel($userTestModel->test);
    }

    public function getUserTestModel() {
        return $this->userTestModel;
    }

    public function setTestModel($testModel) {
        $this->testModel = $testModel;
    }

    public function getTestModel() {
        return $this->testModel;
    }

    public function getUserTestId() {
        return $this->userTestModel->id;
    }

    public function getTestId() {
        return $this->testModel->id;
    }

    public function getCombination() {
        return $this->testModel->combination_variable;
    }

    protected function _calculateAllVariable() {
        $sql = 'SELECT answers.variable_id AS variable_id, SUM(answers.value) AS value 
            FROM user_tests 
            INNER JOIN test_answers ON user_tests.id = test_answers.user_test_id 
            INNER JOIN answers ON answers.id = test_answers.answer_id 
            WHERE user_tests.id = ' . $this->getUserTestId() . ' 
            GROUP BY answers.variable_id';

        return TestVariable::model()->findAllBySql($sql);
    }

    protected function _calculateVariable($variable_id) {
        $sql = 'SELECT SUM(answers.value) AS value 
            FROM user_tests 
            INNER JOIN test_answers ON user_tests.id = test_answers.user_test_id 
            INNER JOIN answers ON answers.id = test_answers.answer_id 
            WHERE user_tests.id = ' . $this->getUserTestId() . ' AND answers.variable_id = ' . $variable_id;

        $testVariable = TestVariable::model()->findBySql($sql);

        return (!empty($testVariable)) ? $testVariable->value : 0;
    }

    protected function _getDefaultVariable() {
        return $this->getTestModel()->type->variables;
    }

    protected function _getVariable($variable_id) {
        return TestVariable::model()->findByAttributes(array('user_test_id' => $this->getUserTestId(), 'variable_id' => $variable_id));
    }

    protected function _saveVariable($variable_id) {
        $testVariable = $this->_getVariable($variable_id);

        if (empty($testVariable)) {
            $testVariableModel = new TestVariable;
            $testVariableModel->user_test_id = $this->getUserTestId();
            $testVariableModel->value = $this->_calculateVariable($variable_id);
            $testVariableModel->variable_id = $variable_id;
            $output = $testVariableModel->save(false);
        } else {
            $testVariable->value = $this->_calculateVariable($variable_id);
            $output = $testVariable->save();
        }
        return $output;
    }

    protected function _getResult($slug) {
        return Result::model()->findByAttributes(array(
            'user_test_id' => $this->getUserTestId(),
            'slug' => $slug
        ));
    }

    protected function _saveResult($result = array()) {
        $resultModel = $this->_getResult($result['slug']);
        if (empty($resultModel)) {
            $newResultModel = new Result;
            $newResultModel->user_test_id = $this->getUserTestId();
            $newResultModel->slug = $result['slug'];
            $newResultModel->description = $result['description'];
            $newResultModel->variable_detail_slug = $result['variable_detail_slug'];
            return $newResultModel->save();
        } else {
            $resultModel->description = $result['description'];
            $resultModel->variable_detail_slug = $result['variable_detail_slug'];
            return $resultModel->save();
        }
    }

    protected function _createResult($results = array()) {
        foreach ($results as $result) {
            $this->_saveResult($result);
        }
    }

    protected function _saveAllTestVariableFromAnswer($clear = false) {
        if ($clear)
            $this->_clearTestVarible();

        $defaultVariable = $this->_getDefaultVariable();
        foreach ($defaultVariable as $variable) {
            $this->_saveVariable($variable->id);
        }
    }

    protected function _saveTestVariableFromAnswer($clear = false) {
        if ($clear)
            $this->_clearTestVarible();

        $testVariable = $this->_calculateAllVariable();
        foreach ($testVariable as $variable) {
            $this->_saveVariable($variable->id);
        }
    }

    protected function _clearTestVarible() {
        return TestVariable::model()->deleteAllByAttributes(array('user_test_id' => $this->getUserTestId()));
    }

    public static function model($className = __CLASS__) {
        $model = new $className(null);
        return $model;
    }

}

?>