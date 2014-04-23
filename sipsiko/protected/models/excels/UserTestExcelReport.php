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
        $this->setCellHead(array_merge(array_merge($mainHead, $variableHead), array('Total', 'Kesimpulan')));

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
                $variableBody[] = (isset($testVariables[$key])) ? $testVariables[$key] : 0;
            }
            $total = array_sum($variableBody);
            $results = $userTest->results;
            if (!empty($results)) {
                $shortness = array();
                foreach ($results as $result) {
                    $shortness[] = $result->variable_details[0]->shortness;
                }
                $this->setCellBody(array_merge(array_merge($mainBody, $variableBody), array($total, implode(' - ', $shortness))));
            } else {
                $this->setCellBody(array_merge($mainBody, $variableBody));
            }
        }

        $this->render('Member Test Report');
    }

    public function getAllMemberResult($model) {
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
            'Variabel',
            'Jumlah',
            'Total',
            'Kesimpulan'
        );
        $this->setCellHead($mainHead);

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
            $variables = CHtml::listData($userTest->test->type->variables, 'id', 'name');
            $testVariables = CHtml::listData($userTest->test_variables, 'variable_id', 'value');

            $results = $userTest->results;
            if (!empty($results)) {
                $shortness = array();
                foreach ($results as $result) {
                    $shortness[] = $result->variable_details[0]->shortness;
                }
            }
            $j = 0;
            foreach ($variables as $key => $variable) {
                $count = (isset($testVariables[$key])) ? $testVariables[$key] : 0;
                if ($j == 0) {
                    $this->setCellBody(array_merge($mainBody, array($variable, $count, array_sum($testVariables), implode(' - ', $shortness))));
                } else {
                    $this->setCellBody(array_merge($this->_createNullValue(count($mainBody)), array($variable, $count)));
                }
                $j++;
            }
        }

        $this->render('Member Test Report');
    }

}

?>