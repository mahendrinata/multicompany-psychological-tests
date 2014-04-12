<?php

class TestController extends GuestController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'generate', 'result'),
                'users' => array('*'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex() {
        $model = new Test('search');
        $model->unsetAttributes();
        if (isset($_GET['Test'])) {
            $model->attributes = $_GET['Test'];
        }

        $model->status = Status::ACTIVE;
        $model->is_public = true;

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionGenerate() {
        $model = Test::model()->findByAttributes(array(
            'status' => Status::ACTIVE,
            'is_public' => true,
            'id' => $_GET['id']
        ));

        $this->render('generate', array(
            'model' => $model,
        ));
    }

    public function actionResult() {
        $testModel = Test::model()->findByPk($_POST['UserTest']['id']);

        $answer = implode(',', $_POST['UserTest']['question']);
        $sql = 'SELECT variables.id AS variable_id, SUM(answers.value) AS value 
            FROM answers 
            INNER JOIN variables ON variables.id = answers.variable_id
            WHERE answers.id IN (' . $answer . ') 
            GROUP BY variables.id 
            ORDER BY value DESC';

        $testVariableModel = TestVariable::model()->findAllBySql($sql);
        $i = $sum = 0;
        $slug = $variableList = array();
        $variableList = array();
        foreach ($testVariableModel as $testVariable) {
            if ($i < $testModel->combination_variable) {
                $slug[] = $testVariable->variable_id;
            }

            $variable = Variable::model()->findByPk($testVariable->variable_id);
            $variableList[] = array(
                'id' => $variable->id,
                'name' => $variable->name,
                'value' => $testVariable->value
            );
            $sum +=$testVariable->value;
            $i++;
        }

        $variableDetailModel = VariableDetail::model()->findAllByAttributes(array('slug' => implode('-', $slug)));

        $this->render('result', array(
            'variable' => $variableList,
            'variableDetail' => $variableDetailModel,
            'sum' => $sum,
            'model' => $testModel
        ));
    }

}
