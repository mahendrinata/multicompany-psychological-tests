<?php

class VariableDetailController extends AdminController {

    public function loadModel($expert = false, $void = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                $expertIds = ($expert) ? AccessWebUser::call()->getExpertIds() : false;
                $this->_model = VariableDetail::model()->findByPkAndExpertIds($_GET['id'], $expertIds, $void);
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
        $model = new VariableDetail;

        $this->performAjaxValidation($model, 'variable-detail-form');

        if (isset($_POST['VariableDetail'])) {
            $model->attributes = $_POST['VariableDetail'];

            $model->created_by = $this->_userId;

            if (isset($_POST['VariableDetail']['Combinations']) && !empty($_POST['VariableDetail']['Combinations']))
                $model->Combinations = $_POST['VariableDetail']['Combinations'];

            if (isset($_POST['VariableDetail']['TagVariables']) && !empty($_POST['VariableDetail']['TagVariables']))
                $model->TagVariables = $_POST['VariableDetail']['TagVariables'];

            if ($model->withRelated->save(array('Combinations', 'TagVariables')))
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
            $model->updated_by = $this->_userId;
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
            if (!empty($model->ResultDetails)) {
                $model->status_id = Status::model()->getStatusIdBySlug(Status::VOID);
                $model->save();
            } else {
                $model->delete();
            }

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
