<?php

class VariableDetailController extends AdminController {

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

    public function loadModel($expert = false, $void = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if ($expert) {
                    $this->_model = VariableDetail::model()->findByAttributes(array(
                        'id' => $_GET['id'],
                        'user_profile_id' => $this->profiles[RolePrivilege::EXPERT]
                    ));
                } else {
                    $this->_model = VariableDetail::model()->findbyPk($_GET['id']);
                }
            }
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
        $model = new VariableDetail;

        $this->performAjaxValidation($model, 'variable-detail-form', array('VariableDetail' => array('user_profile_id' => $this->getUserProfileId(RolePrivilege::EXPERT))));

        if (isset($_POST['VariableDetail'])) {
            $model->attributes = $_POST['VariableDetail'];

            $model->user_profile_id = $this->getUserProfileId(RolePrivilege::EXPERT);

            if (isset($_POST['VariableDetail']['combinations']) && !empty($_POST['VariableDetail']['combinations']))
                $model->combinations = $_POST['VariableDetail']['combinations'];

            if (isset($_POST['VariableDetail']['tag_variables']) && !empty($_POST['VariableDetail']['tag_variables']))
                $model->tag_variables = $_POST['VariableDetail']['tag_variables'];

            if ($model->saveWithRelated(array('combinations', 'tag_variables')))
                $this->redirect(array('admin/variabledetail/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel(true, true);

        $this->performAjaxValidation($model, 'variable-detail-form');

        if (isset($_POST['VariableDetail'])) {
            $model->attributes = $_POST['VariableDetail'];
            if ($model->save())
                $this->redirect(array('admin/variabledetail/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $model = $this->loadModel(true, true);
            $model->status = Status::VOID;
            $model->save();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/variabledetail/index'));
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
