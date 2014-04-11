<?php

class TestController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'delete'),
                'roles' => array(RolePrivilege::EXPERT),
            ),
            array('allow',
                'actions' => array('company', 'active', 'generate'),
                'roles' => array(RolePrivilege::COMPANY)
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

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
        $model->is_expert = true;

        $this->performAjaxValidation($model, 'test-form');

        if (isset($_POST['Test'])) {
            $model->attributes = $_POST['Test'];
            $model->is_expert = true;
            $model->user_profile_id = $this->profiles[RolePrivilege::EXPERT];
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
            $model = Test::model()->with('questions', 'questions.answers')->findByPk($_GET['id']);
            $this->loadModel()->delete();
            foreach ($model->questions as $question) {
                $question->delete();
                foreach ($question->answers as $answer) {
                    $answer->delete();
                }
            }

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

        $model->user_profile_id = $this->profiles[RolePrivilege::EXPERT];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionCompany() {
        $model = new Test('search');
        $model->unsetAttributes();
        if (isset($_GET['Test']))
            $model->attributes = $_GET['Test'];

        $model->user_profile_id = $this->profiles[RolePrivilege::COMPANY];

        $this->render('company', array(
            'model' => $model,
        ));
    }

    public function actionActive() {
        $model = new Test('search');
        $model->unsetAttributes();
        if (isset($_GET['Test']))
            $model->attributes = $_GET['Test'];

        $model->status = Status::ACTIVE;
        $model->is_expert = true;

        $this->render('active', array(
            'model' => $model,
        ));
    }

    public function actionGenerate() {
        if (Yii::app()->request->isPostRequest) {

            $save = Test::model()->generate($_GET['id'], $this->profiles[RolePrivilege::COMPANY]);

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/test/company'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}
