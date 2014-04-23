<?php

class ConclusionPairTest extends ConclusionPsychologyTest {

    const CONCLUSION = 'CONCLUSION';
    const PAIR_COUNT = 2;

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
                'order' => 'id ASC',
        ));
    }

    public function generate($user_test_id) {
        $this->setUserTestModel(UserTest::model()->findByPk($user_test_id));
        $this->_saveAllTestVariableFromAnswer();
        $slugs = CHtml::listData($this->__getData(), 'variable_id', 'value');
        $countVariable = count($slugs) / self::PAIR_COUNT;
        $variables = array();
        for ($i = 0; $i < $countVariable; $i++) {
            $offset = ($i == 0) ? 0 : ($i * self::PAIR_COUNT) - 1;
            $variables[$i] = array_slice($slugs, $offset, 2, true);
        }
        foreach ($variables as $variable){
            $compare = array();
            foreach ($variable as $key => $val){
                
            }
        }
        print_r($variables);die;
        return $this->_saveResult(array(
                'slug' => self::CONCLUSION,
                'description' => $this->__getDescription(self::CONCLUSION),
                'variable_detail_slug' => implode('-', $slugs)
        ));
    }

}

?>