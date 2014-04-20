<?php

class UserTestExcelReport extends ExcelReport {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getMemberResult($model, $testModel) {
        $userTestModel = $model->search()->getData();
        $mainHead = array(
            'No.',
            'Nama Peserta',
            'Nama Tes',
            'Sisa Waktu',
            'Waktu digunakan',
            'Tanggal Mulai',
            'Tanggal Akhir',
            'Status',
        );
        $variableHead = CHtml::listData(Variable::model()->findAllByAttributes(array('type_id' => $testModel->type_id)), 'id', 'name');
        $this->setCellHead(CMap::mergeArray($mainHead, $variableHead));

        $i = 0;
        foreach ($userTestModel as $userTest) {
            $i++;
            $mainBody = array(
                $i,
                $userTest->user_profile->first_name . ' ' . $userTest->user_profile->last_name,
                $userTest->test->name,
                $userTest->spent_time,
                $userTest->time_used,
                $userTest->start_date,
                $userTest->end_date,
                $userTest->status
            );
            $testVariables = CHtml::listData($userTest->test_variables, 'variable_id', 'value');
            $variableBody = array();
            foreach ($variableHead as $key => $variable) {
                $variableBody[] = (isset($testVariables[$key])) ? $testVariables[$key] : null;
            }
            $this->setCellBody(CMap::mergeArray($mainBody, $variableBody));
        }

        $this->render('Member Test Report');
    }

}

?>