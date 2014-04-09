<?php

class UserTestController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'delete'),
                'roles' => array(RolePrivilege::COMPANY),
            ),
            array('allow',
                'actions' => array('member', 'test', 'savetestanswer'),
                'roles' => array(RolePrivilege::MEMBER),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = UserTest::model()->findbyPk($_GET['id']);
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
        $model = new UserTest;

        $this->performAjaxValidation($model, 'user-test-form');

        if (isset($_POST['UserTest'])) {
            $model->attributes = $_POST['UserTest'];
            $model->company_id = $this->profiles[RolePrivilege::COMPANY];
            if ($model->save())
                $this->redirect(array('admin/usertest/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model, 'user-test-form');

        if (isset($_POST['UserTest'])) {
            $model->attributes = $_POST['UserTest'];
            if ($model->save())
                $this->redirect(array('admin/usertest/index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/user-test/index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionIndex() {
        $model = new UserTest('search');
        $model->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $model->attributes = $_GET['UserTest'];
        }

        $model->status = Status::ACTIVE;

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionMember() {
        $model = new UserTest('search');
        $model->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $model->attributes = $_GET['UserTest'];
        }

        $model->status = Status::ACTIVE;
        $model->user_profile_id = $this->profiles[RolePrivilege::MEMBER];

        $this->render('member', array(
            'model' => $model,
        ));
    }

    public function actionTest() {
        $testModel = $this->loadModel();

        if (isset($_POST['UserTest'])) {
            $testModel->status = Status::INACTIVE;
            if ($testModel->save())
                TestVariable::model()->setTestVariable ($_POST['UserTest']['id']);
                $this->redirect(array('admin/usertest/member'));
        }

        $this->render('test', array(
            'model' => $testModel,
        ));
    }

    public function actionSaveTestAnswer() {
        if (Yii::app()->request->isPostRequest) {
            $testAnswer = TestAnswer::model()->findByAttributes(array(
                'user_test_id' => $_POST['user_test_id'],
                'question_id' => $_POST['question_id']
            ));
            if (empty($testAnswer)) {
                $newTestAnswer = new TestAnswer;
                $newTestAnswer->attributes = $_POST;
                $save = $newTestAnswer->save();
            } else {
                $testAnswer->answer_id = $_POST['answer_id'];
                $save = $testAnswer->save();
            }
            echo json_encode(array('data' => $save));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

}
