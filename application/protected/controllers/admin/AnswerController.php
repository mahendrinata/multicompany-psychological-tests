<?php

class AnswerController extends AdminController {

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Answer::model()->findbyPk($_GET['id']);
            if ($this->_model === null || $this->_model->status == Status::VOID)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionCreate() {
        if (Yii::app()->request->isAjaxRequest) {
            $this->validateGetRequest(array('id', 'test_id'));
            $id = $_GET['id'] + 1;
            $test = Test::model()->findByPk($_GET['test_id']);
            $this->renderPartial('create', array('id' => $id, 'test' => $test));
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function actionDelete() {
        if (Yii::app()->request->isAjaxRequest && Yii::app()->request->isPostRequest) {
            $model = $this->loadModel();
            if (!empty($model->test_answers)) {
                $model->status = Status::VOID;
                $model->save();
            } else {
                $model->delete();
            }
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}
