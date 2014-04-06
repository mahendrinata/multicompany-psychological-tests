<?php

class TestController extends AdminController {

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Test::model()->with('type')->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionView() {
        $this->data['testModel'] = $this->loadModel();
        
        $questionModel = new Question('search');
        $questionModel->unsetAttributes();
        if (isset($_GET['Question']))
            $questionModel->attributes = $_GET['Question'];
        
        $questionModel->test_id = $this->data['testModel']->id;
        
        $this->data['questionModel'] = $questionModel;
        
        $this->render('view', $this->data);
    }

    public function actionCreate() {
        $model = new Test;

        $this->performAjaxValidation($model, 'test-form');

        if (isset($_POST['Test'])) {
            $model->attributes = $_POST['Test'];
            if ($model->save())
                $this->redirect(array('admin/test/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model);

        if (isset($_POST['Test'])) {
            $model->attributes = $_POST['Test'];
            if ($model->save())
                $this->redirect(array('admin/test/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionIndex() {
        $model = new Test('search');
        $model->unsetAttributes();
        if (isset($_GET['Test']))
            $model->attributes = $_GET['Test'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

}
