<?php

class RoleController extends AdminController {

    public function loadModel($void = false) {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Role::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
            if ($void && $this->_model->status == Status::VOID)
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
        $model = new Role;

        $this->performAjaxValidation($model, 'role-form');

        if (isset($_POST['Role'])) {
            $model->attributes = $_POST['Role'];
            if ($model->save())
                $this->redirect(array('admin/role/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel(true);

        $this->performAjaxValidation($model, 'role-form');

        if (isset($_POST['Role'])) {
            $model->attributes = $_POST['Role'];
            if ($model->save())
                $this->redirect(array('admin/role/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $model = $this->loadModel(true);
            if (!empty($model->users)) {
                $model->status = Status::VOID;
                $model->save();
            } else {
                $model->delete();
            }

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/role/index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionIndex() {
        $model = new Role('search');
        $model->unsetAttributes();
        if (isset($_GET['Role']))
            $model->attributes = $_GET['Role'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

}
