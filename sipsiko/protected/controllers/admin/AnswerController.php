<?php

class AnswerController extends AdminController {

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
        $this->renderPartial('create', array('id' => $id));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}
