<?php

class UserTestController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'delete', 'membertest'),
                'roles' => array(RolePrivilege::COMPANY),
            ),
            array('allow',
                'actions' => array('member', 'test', 'savetestanswer', 'setspenttime', 'memberresult', 'public', 'generate', 'settimeused'),
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

            $testModel = Test::model()->findByPk($model->test_id);
            if (empty($model->spent_time)) {
                $model->spent_time = $testModel->duration;
            }
            $model->show_result = $testModel->show_result;
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
        $model->company_id = $this->profiles[RolePrivilege::COMPANY];

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
                TestVariable::model()->setTestVariable($_POST['UserTest']['id']);
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

    public function actionSetSpentTime() {
        if (Yii::app()->request->isPostRequest) {
            $model = UserTest::model()->findByPk($_POST['user_test_id']);
            $model->spent_time = $model->spent_time - 1;
            $model->time_used = $model->time_used + 1;
            if ($model->save())
                echo json_encode(array('spentTime' => $model->spent_time));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionMemberResult() {
        $model = new UserTest('search');
        $model->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $model->attributes = $_GET['UserTest'];
        }

        $model->status = Status::INACTIVE;
        $model->user_profile_id = $this->profiles[RolePrivilege::MEMBER];
        $model->show_result = true;

        $this->render('member_result', array(
            'model' => $model,
        ));
    }

    public function actionPublic() {
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

    public function actionGenerate() {
        $testModel = Test::model()->findByPk($_GET['id']);

        if (!empty($testModel)) {
            $userTestModel = new UserTest;
            $userTestModel->spent_time = $testModel->duration;
            $userTestModel->show_result = true;
            $userTestModel->status = Status::ACTIVE;
            $userTestModel->test_id = $testModel->id;
            $userTestModel->company_id = $testModel->user_profile_id;
            $userTestModel->user_profile_id = $this->profiles[RolePrivilege::MEMBER];
            if ($userTestModel->save()) {
                $this->redirect(array('admin/usertest/member'));
            }
        }
    }

    public function actionSetTimeUsed() {
        if (Yii::app()->request->isPostRequest) {
            $model = UserTest::model()->findByPk($_POST['user_test_id']);
            $model->time_used = $model->time_used + 1;
            if ($model->save())
                echo json_encode(array('timeUsed' => $model->time_used));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionMemberTest() {
        $model = new UserTest;

        $this->performAjaxValidation($model, 'user-test-form');

        if (isset($_POST['UserTest'])) {
            $model->attributes = $_POST['UserTest'];
            $model->company_id = $this->profiles[RolePrivilege::COMPANY];

            $testModel = Test::model()->findByPk($_GET['id']);
            if (empty($model->spent_time)) {
                $model->spent_time = $testModel->duration;
            }
            
            $model->show_result = $testModel->show_result;
            $model->test_id = $testModel->id;
            $model->save();
        }

        $userTestModel = new UserTest('search');
        $userTestModel->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $model->attributes = $_GET['UserTest'];
        }

        $userTestModel->company_id = $this->profiles[RolePrivilege::COMPANY];
        $userTestModel->test_id = $_GET['id'];

        $this->render('member_test', array(
            'model' => $model,
            'userTestModel' => $userTestModel
        ));
    }

}
