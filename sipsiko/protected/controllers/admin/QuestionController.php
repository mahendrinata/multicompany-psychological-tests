<?php

class QuestionController extends AdminController {

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Question::model()->with('answers')->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionCreate() {
        $this->data['test'] = Test::model()->findBySlug($_GET['id']);

        $questionModel = new Question;

        $this->performAjaxValidation($questionModel, 'question-form');

        if (isset($_POST['Question'])) {
            $saveData = $_POST;
            $saveData['Question']['test_id'] = $this->data['test']->id;

            if ($questionModel->saveData($saveData))
                $this->redirect(array('admin/test/index'));
        }

        $this->data['model'] = $questionModel;
        $this->render('create', $this->data);
    }

    public function actionUpdate() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model, 'question-form');

        if (isset($_POST['Question'])) {
            $saveData = $_POST;
            $saveData['Question']['id'] = $model->id;
            if ($model->saveData($saveData))
                $this->redirect(array('admin/test/view', 'id' => $model->test_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $model = $this->loadModel();
            $this->loadModel()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/test/view', 'id' => $model->test_id));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}
