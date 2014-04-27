<?php

class VariableController extends AdminController {

    public function loadModel($expert = false, $void = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                $expertIds = ($expert) ? AccessWebUser::call()->getExpertIds() : false;
                $this->_model = Variable::model()->findByPkAndExpertIds($_GET['id'], $expertIds, $void);
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
            $model->created_by = $this->_userId;
            if ($model->save())
                $this->redirect(array('admin/variable/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel(true, true);

        $this->performAjaxValidation($model, 'variable-form');

        if (isset($_POST['Variable'])) {
            $model->attributes = $_POST['Variable'];
            $model->updated_by = $this->_userId;
            if ($model->save())
                $this->redirect(array('admin/variable/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $model = $this->loadModel(true, true);
            if (!empty($model->Questions)) {
                $model->status_id = Status::model()->getStatusIdBySlug(Status::VOID);
                $model->save();
            } else {
                $model->delete();
            }

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
