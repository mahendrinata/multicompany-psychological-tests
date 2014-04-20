<?php

class TestController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'delete', 'generatevalidation', 'result'),
                'roles' => array(RolePrivilege::EXPERT),
            ),
            array('allow',
                'actions' => array('viewcompany', 'updatecompany', 'deletecompany', 'company', 'active', 'generate'),
                'roles' => array(RolePrivilege::COMPANY)
            ),
            array('allow',
                'actions' => array('public'),
                'roles' => array(RolePrivilege::MEMBER)
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function loadModel($role = null) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if (!empty($role)) {
                    $this->_model = Test::model()->findByAttributes(array(
                        'id' => $_GET['id'],
                        'user_profile_id' => $this->profiles[$role]));
                } else {
                    $this->_model = Test::model()->findByPk($_GET['id']);
                }
            }
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionView() {
        $this->data['testModel'] = $this->loadModel(RolePrivilege::EXPERT);

        $questionModel = new Question('search');
        $questionModel->unsetAttributes();
        if (isset($_GET['Question']))
            $questionModel->attributes = $_GET['Question'];

        $questionModel->test_id = $this->data['testModel']->id;

        $this->data['questionModel'] = $questionModel;

        $this->render('view', $this->data);
    }

    public function actionViewCompany() {
        $this->data['testModel'] = $this->loadModel(RolePrivilege::COMPANY);

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
        $model = $this->loadModel(RolePrivilege::EXPERT);

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
        $model = $this->loadModel(RolePrivilege::COMPANY);

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
            $model = $this->loadModel(RolePrivilege::EXPERT);
            $this->loadModel(RolePrivilege::EXPERT)->delete();
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
            $model = $this->loadModel(RolePrivilege::COMPANY);
            $this->loadModel(RolePrivilege::COMPANY)->delete();
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
        Test::model()->setExpired();

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
        Test::model()->setExpired();

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
        Test::model()->setExpired();

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

        $model = $this->loadModel();

        $save = Test::model()->generate($model->id, $this->profiles[RolePrivilege::COMPANY]);

        if (!isset($_GET['ajax']))
            $this->redirect(array('admin/test/company'));
//        } else
//            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionGenerateValidation() {
        $testModel = $this->loadModel(RolePrivilege::EXPERT);

        if (!empty($testModel)) {
            $userTestModel = new UserTest;
            $userTestModel->spent_time = $testModel->duration;
            $userTestModel->show_result = true;
            $userTestModel->status = Status::ACTIVE;
            $userTestModel->test_id = $testModel->id;
            $userTestModel->user_profile_id = $this->profiles[RolePrivilege::EXPERT];
            if ($userTestModel->save()) {
                $this->redirect(array('admin/usertest/validation', 'id' => $userTestModel->id));
            }
        }
    }

    public function actionResult() {
        $testModel = $this->loadModel(RolePrivilege::EXPERT);

        $model = new UserTest('search');
        $model->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $model->attributes = $_GET['UserTest'];
        }

        $model->user_profile_id = $this->profiles[RolePrivilege::EXPERT];
        $model->test_id = $testModel->id;

        $this->render('result', array(
            'model' => $model,
            'test' => $testModel
        ));
    }

    public function actionPublic() {
        Test::model()->setExpired();

        $model = new Test('search');
        $model->unsetAttributes();
        if (isset($_GET['Test'])) {
            $model->attributes = $_GET['Test'];
        }

        $model->status = Status::ACTIVE;
        $model->is_public = true;

        $this->render('public', array(
            'model' => $model,
        ));
    }

}
