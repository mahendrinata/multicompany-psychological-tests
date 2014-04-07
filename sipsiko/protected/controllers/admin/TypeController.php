<?php

class TypeController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'delete'),
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
                $this->_model = Type::model()->findbyPk($_GET['id']);
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
        $model = new Type;

        $this->performAjaxValidation($model, 'type-form');

        if (isset($_POST['Type'])) {
            $model->attributes = $_POST['Type'];
            if ($model->save())
                $this->redirect(array('admin/type/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model, 'type-form');

        if (isset($_POST['Type'])) {
            $model->attributes = $_POST['Type'];
            if ($model->save())
                $this->redirect(array('admin/type/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/type/index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionIndex() {
        $model = new Type('search');
        $model->unsetAttributes();
        if (isset($_GET['Type']))
            $model->attributes = $_GET['Type'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

}
