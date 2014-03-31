<?php

class VariableDetailController extends AdminController {

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = VariableDetail::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionView() {
        $this->render('view', array(
            'model' => $this->loadModel(),
        ));
    }

    public function actionCreate() {
        $model = new VariableDetail;

        $this->performAjaxValidation($model, 'variable-detail-form');

        if (isset($_POST['VariableDetail'])) {
            $model->attributes = $_POST['VariableDetail'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model, 'variable-detail-form');

        if (isset($_POST['VariableDetail'])) {
            $model->attributes = $_POST['VariableDetail'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
        $model = new VariableDetail('search');
        $model->unsetAttributes();
        if (isset($_GET['VariableDetail']))
            $model->attributes = $_GET['VariableDetail'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

}
