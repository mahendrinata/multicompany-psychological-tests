<?php

class AnswerController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('create', 'delete'),
                'roles' => array(RolePrivilege::EXPERT),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Answer::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionCreate() {
        $id = $_GET['id'] + 1;
        $test = Test::model()->findByPk($_GET['test_id']);
        $this->renderPartial('create', array('id' => $id, 'test' => $test));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}
