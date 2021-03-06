<?php

class ConclusionSingleTest extends ConclusionPsychologyTest {

    const CONCLUSION = 'CONCLUSION';

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    private function __getDescription($slug) {
        $descripsions = array(
            self::CONCLUSION => 'Kesimpulan Tes'
        );
        return $descripsions[$slug];
    }

    private function __getData() {
        return TestVariable::model()->findAll(array(
                'condition' => 'user_test_id =' . $this->getUserTestId(),
                'order' => 'value DESC',
                'limit' => $this->getCombination()
        ));
    }

    public function generate($user_test_id) {
        $this->setUserTestModel(UserTest::model()->findByPk($user_test_id));
        $this->_saveAllTestVariableFromAnswer();
        $slugs = CHtml::listData($this->__getData(), 'id', 'variable_id');
        return $this->_saveResult(array(
                'slug' => self::CONCLUSION,
                'description' => $this->__getDescription(self::CONCLUSION),
                'variable_detail_slug' => implode('-', $slugs)
        ));
    }

}

?>