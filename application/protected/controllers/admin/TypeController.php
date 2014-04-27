<?php

class TypeController extends AdminController {

    public function loadModel($expert = false, $void = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if ($expert) {
                    $this->_model = Type::model()->findByAttributes(array(
                        'id' => $_GET['id'],
                        'expert_id' => $this->profiles[RolePrivilege::EXPERT]
                    ));
                } else {
                    $this->_model = Type::model()->findbyPk($_GET['id']);
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
        $model = new Type;

        $this->performAjaxValidation($model, 'type-form');

        if (isset($_POST['Type'])) {
            $model->attributes = $_POST['Type'];
            $model->user_profile_id = $this->profiles[RolePrivilege::EXPERT];
            if ($model->save())
                $this->redirect(array('admin/type/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel(true, true);

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
            $model = $this->loadModel(true, true);
            if (!empty($model->tests)) {
                $model->status = Status::VOID;
                $model->save();
            } else {
                $model->delete();
            }

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
