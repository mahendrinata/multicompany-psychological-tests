<?php

class TagController extends AdminController {

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Tag::model()->findbyPk($_GET['id']);
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
        $model = new Tag;

        $this->performAjaxValidation($model, 'tag-form');

        if (isset($_POST['Tag'])) {
            $model->attributes = $_POST['Tag'];
            if ($model->save())
                $this->redirect(array('admin/tag/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model, 'tag-form');

        if (isset($_POST['Tag'])) {
            $model->attributes = $_POST['Tag'];
            if ($model->save())
                $this->redirect(array('admin/tag/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/tag/index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionIndex() {
        $model = new Tag('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Tag']))
            $model->attributes = $_GET['Tag'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

}
