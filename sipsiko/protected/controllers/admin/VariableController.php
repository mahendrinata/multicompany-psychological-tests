<?php

class VariableController extends AdminController {

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

    public function loadModel($expert = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if ($expert) {
                    $this->_model = Variable::model()->findByAttributes(array(
                        'id' => $_GET['id'],
                        'user_profile_id' => $this->profiles[RolePrivilege::EXPERT]
                    ));
                } else {
                    $this->_model = Variable::model()->findbyPk($_GET['id']);
                }
            }
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
        $model = new Variable;

        $this->performAjaxValidation($model, 'variable-form');

        if (isset($_POST['Variable'])) {
            $model->attributes = $_POST['Variable'];
            if ($model->save())
                $this->redirect(array('admin/variable/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel(true);

        $this->performAjaxValidation($model, 'variable-form');

        if (isset($_POST['Variable'])) {
            $model->attributes = $_POST['Variable'];
            if ($model->save())
                $this->redirect(array('admin/variable/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel(true)->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/variable/index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionIndex() {
        $model = new Variable('search');
        $model->unsetAttributes();
        if (isset($_GET['Variable']))
            $model->attributes = $_GET['Variable'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

}
