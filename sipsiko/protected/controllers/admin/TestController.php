<?php

class TestController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'delete'),
                'roles' => array(RolePrivilege::EXPERT),
            ),
            array('allow',
                'actions' => array('viewcompany', 'updatecompany', 'deletecompany', 'company', 'active', 'generate'),
                'roles' => array(RolePrivilege::COMPANY)
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function loadModelExpert() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Test::model()->findByAttributes(array(
                    'id' => $_GET['id'],
                    'user_profile_id' => $this->profiles[RolePrivilege::EXPERT]));
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function loadModelCompany() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = Test::model()->findByAttributes(array(
                    'id' => $_GET['id'],
                    'user_profile_id' => $this->profiles[RolePrivilege::COMPANY]));

            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionView() {
        $this->data['testModel'] = $this->loadModelExpert();

        $questionModel = new Question('search');
        $questionModel->unsetAttributes();
        if (isset($_GET['Question']))
            $questionModel->attributes = $_GET['Question'];

        $questionModel->test_id = $this->data['testModel']->id;

        $this->data['questionModel'] = $questionModel;

        $this->render('view', $this->data);
    }

    public function actionViewCompany() {
        $this->data['testModel'] = $this->loadModelCompany();

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
        $model = $this->loadModelExpert();

        $this->performAjaxValidation($model);

        if (isset($_POST['Test'])) {
            $model->attributes = $_POST['Test'];
            if ($model->save()) {
                $this->redirect(array('admin/test/index'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionUpdateCompany() {
        $model = $this->loadModelCompany();

        $this->performAjaxValidation($model);

        if (isset($_POST['Test'])) {
            $model->attributes = $_POST['Test'];
            if ($model->save()) {
                $this->redirect(array('admin/test/company'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $model = $this->loadModelExpert();
            $this->loadModelExpert()->delete();
            foreach ($model->questions as $question) {
                $question->delete();
                foreach ($question->answers as $answer) {
                    $answer->delete();
                }
            }

            if (!isset($_GET['ajax'])) {
                $this->redirect(array('admin/test/index'));
            }
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionDeleteCompany() {
        if (Yii::app()->request->isPostRequest) {
            $model = $this->loadModelCompany();
            $this->loadModelCompany()->delete();
            foreach ($model->questions as $question) {
                $question->delete();
                foreach ($question->answers as $answer) {
                    $answer->delete();
                }
            }

            if (!isset($_GET['ajax'])) {
                $this->redirect(array('admin/test/company'));
            }
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
//        if (Yii::app()->request->isPostRequest) {

        $model = $this->loadModelCompany();

        $save = Test::model()->generate($model->id, $this->profiles[RolePrivilege::COMPANY]);

        if (!isset($_GET['ajax']))
            $this->redirect(array('admin/test/company'));
//        } else
//            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}
