<?php

class ConclusionPsychologyTest extends Conclusion {

    protected function _getUserTest($user_test_id) {
        return UserTest::model()->findByPk($user_test_id);
    }

    protected function _calculateVariable($sql) {
        return TestVariable::model()->findAllBySql($sql);
    }

    protected function _getVariable($user_test_id, $variable) {
        return TestVariable::model()->findByAttributes(array('user_test_id' => $user_test_id, 'variable_id' => $variable->variable_id));
    }

    protected function _saveVariable($user_test_id, $variable) {
        $testVariable = $this->_getVariable($user_test_id, $variable);

        if (empty($testVariable)) {
            $testVariableModel = new TestVariable;
            $testVariableModel->user_test_id = $user_test_id;
            $testVariableModel->value = $variable->value;
            $testVariableModel->variable_id = $variable->variable_id;
            $output = $testVariableModel->save(false);
        } else {
            $testVariable->value = $variable->value;
            $output = $testVariable->save();
        }
        return $output;
    }

    public static function model($className = __CLASS__) {
        $model = new $className(null);
        return $model;
    }

}

?>