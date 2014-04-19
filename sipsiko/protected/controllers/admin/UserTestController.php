<?php

class UserTestController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('validation', 'savevalidationanswer', 'setvalidationspenttime', 'validationview', 'validationdelete'),
                'roles' => array(RolePrivilege::EXPERT),
            ),
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'delete', 'membertest', 'result', 'settestvariable'),
                'roles' => array(RolePrivilege::COMPANY),
            ),
            array('allow',
                'actions' => array('member', 'test', 'savetestanswer', 'setspenttime', 'memberresult', 'public', 'generate', 'viewmember'),
                'roles' => array(RolePrivilege::MEMBER),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function loadModelCompany() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = UserTest::model()->findByAttributes(array(
                    'id' => $_GET['id'],
                    'company_id' => $this->profiles[RolePrivilege::COMPANY]));
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function loadModelMember($token = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if ($token) {
                    UserTest::model()->generateToken($_GET['id']);
                }

                $this->_model = UserTest::model()->findByAttributes(array(
                    'id' => $_GET['id'],
                    'user_profile_id' => $this->profiles[RolePrivilege::MEMBER]));
            }
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function loadModelMemberActive($token = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if ($token) {
                    UserTest::model()->generateToken($_GET['id']);
                }

                $this->_model = UserTest::model()->findByAttributes(array(
                    'id' => $_GET['id'],
                    'user_profile_id' => $this->profiles[RolePrivilege::MEMBER],
                    'status' => Status::ACTIVE));
            }
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function loadModelExpert($token = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if ($token) {
                    UserTest::model()->generateToken($_GET['id']);
                }

                $this->_model = UserTest::model()->findByAttributes(array(
                    'id' => $_GET['id'],
                    'user_profile_id' => $this->profiles[RolePrivilege::EXPERT]));
            }
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function loadModelExpertActive($token = false) {
        if ($this->_model === null) {
            if (isset($_GET['id'])) {
                if ($token) {
                    UserTest::model()->generateToken($_GET['id']);
                }

                $this->_model = UserTest::model()->findByAttributes(array(
                    'id' => $_GET['id'],
                    'user_profile_id' => $this->profiles[RolePrivilege::EXPERT],
                    'status' => Status::ACTIVE));
            }
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    public function actionView() {
        $model = $this->loadModelCompany();

        $testAnswerModel = new TestAnswer('search');
        $testAnswerModel->unsetAttributes();
        if (isset($_GET['TestAnswer'])) {
            $testAnswerModel->attributes = $_GET['TestAnswer'];
        }
        $testAnswerModel->user_test_id = $model->id;

        $this->render('view', array(
            'model' => $model,
            'testAnswerModel' => $testAnswerModel
        ));
    }

    public function actionViewMember() {
        $this->render('view_member', array(
            'model' => $this->loadModelMember(),
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
            if (empty($model->start_date)) {
                $model->start_date = $testModel->start_date;
            }
            if (empty($model->end_date)) {
                $model->end_date = $testModel->end_date;
            }
            if (empty($model->show_result)) {
                $model->show_result = $testModel->show_result;
            }
            if ($model->save())
                $this->redirect(array('admin/usertest/index'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModelCompany();

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
            $this->loadModelCompany()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/usertest/index'));
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
        $userTestModel = $this->loadModelMemberActive(true);

        if (isset($_POST['UserTest'])) {
            $userTestModel->status = Status::FINISH;
            if ($userTestModel->save()) {
                if (TestVariable::model()->setTestVariable($_POST['UserTest']['id']))
                    $this->redirect(array('admin/usertest/member'));
            }
        }

        $this->render('test', array(
            'model' => $userTestModel,
        ));
    }

    public function actionSaveTestAnswer() {
        if (Yii::app()->request->isAjaxRequest && Yii::app()->request->isPostRequest) {
            $testAnswer = TestAnswer::model()->findByAttributes(array(
                'user_test_id' => $_POST['user_test_id'],
                'question_id' => $_POST['question_id']
            ));
            $userTestModel = UserTest::model()->findByAttributes(array(
                'id' => $_POST['user_test_id'],
                'user_profile_id' => $this->profiles[RolePrivilege::MEMBER],
                'token' => $_POST['token'],
                'status' => Status::ACTIVE
            ));
            if (!empty($userTestModel)) {
                if (empty($testAnswer)) {
                    $newTestAnswer = new TestAnswer;
                    $newTestAnswer->attributes = $_POST;
                    $save = $newTestAnswer->save();
                } else {
                    $testAnswer->answer_id = $_POST['answer_id'];
                    $save = $testAnswer->save();
                }
                echo json_encode(array('data' => $save));
            } else {
                echo json_encode(array('data' => $save, 'error' => 'Invalid request. Please do not repeat this request again.'));
            }
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionSetSpentTime() {
        if (Yii::app()->request->isAjaxRequest && Yii::app()->request->isPostRequest) {
            $model = UserTest::model()->findByAttributes(array(
                'id' => $_POST['user_test_id'],
                'user_profile_id' => $this->profiles[RolePrivilege::MEMBER],
                'token' => $_POST['token'],
                'status' => Status::ACTIVE
            ));

            if (!empty($model)) {
                if (!empty($model->spent_time)) {
                    $spent_time = $model->spent_time = $model->spent_time - 1;
                    $model->time_used = $model->time_used + 1;
                    if ($model->save())
                        echo json_encode(array('spentTime' => $spent_time, 'time_used' => $model->time_used));
                }else {
                    $model->time_used = $model->time_used + 1;
                    if ($model->save())
                        echo json_encode(array('time_used' => $model->time_used));
                }
            } else {
                throw new CHttpException(404, 'The requested page does not exist.');
            }
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionMemberResult() {
        $model = new UserTest('search');
        $model->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $model->attributes = $_GET['UserTest'];
        }

        $model->status = Status::FINISH;
        $model->user_profile_id = $this->profiles[RolePrivilege::MEMBER];
        $model->show_result = true;

        $this->render('member_result', array(
            'model' => $model,
        ));
    }

    public function actionResult() {
        $model = new UserTest('search');
        $model->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $model->attributes = $_GET['UserTest'];
        }

        $model->status = Status::FINISH;
        $model->company_id = $this->profiles[RolePrivilege::COMPANY];

        $this->render('result', array(
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

    public function actionMemberTest() {
        $model = new UserTest;

        $this->performAjaxValidation($model, 'user-test-form');
        $testModel = Test::model()->findByPk($_GET['id']);

        if (isset($_POST['UserTest'])) {
            $model->attributes = $_POST['UserTest'];
            $model->company_id = $this->profiles[RolePrivilege::COMPANY];

            $model->test_id = $testModel->id;
            if ($model->save())
                $this->refresh();
        }else {
            $model->spent_time = $testModel->duration;
            $model->show_result = $testModel->show_result;
            $model->start_date = $testModel->start_date;
            $model->end_date = $testModel->end_date;
            $model->status = $testModel->status;
        }

        $userTestModel = new UserTest('search');
        $userTestModel->unsetAttributes();
        if (isset($_GET['UserTest'])) {
            $userTestModel->attributes = $_GET['UserTest'];
        }

        $userTestModel->company_id = $this->profiles[RolePrivilege::COMPANY];
        $userTestModel->test_id = $testModel->id;

        $this->render('member_test', array(
            'model' => $model,
            'userTestModel' => $userTestModel
        ));
    }

    public function actionValidation() {
        $userTestModel = $this->loadModelExpertActive(true);

        if (isset($_POST['UserTest'])) {
            $userTestModel->status = Status::FINISH;
            if ($userTestModel->save())
                TestVariable::model()->setTestVariable($_POST['UserTest']['id']);
            $this->redirect(array('admin/test/result', 'id' => $userTestModel->test_id));
        }

        $this->render('validation', array(
            'model' => $userTestModel,
        ));
    }

    public function actionSaveValidationAnswer() {
        if (Yii::app()->request->isAjaxRequest && Yii::app()->request->isPostRequest) {
            $testAnswer = TestAnswer::model()->findByAttributes(array(
                'user_test_id' => $_POST['user_test_id'],
                'question_id' => $_POST['question_id']
            ));
            $userTestModel = UserTest::model()->findByAttributes(array(
                'id' => $_POST['user_test_id'],
                'user_profile_id' => $this->profiles[RolePrivilege::EXPERT],
                'token' => $_POST['token'],
                'status' => Status::ACTIVE
            ));
            if (!empty($userTestModel)) {
                if (empty($testAnswer)) {
                    $newTestAnswer = new TestAnswer;
                    $newTestAnswer->attributes = $_POST;
                    $save = $newTestAnswer->save();
                } else {
                    $testAnswer->answer_id = $_POST['answer_id'];
                    $save = $testAnswer->save();
                }
                echo json_encode(array('data' => $save));
            } else {
                echo json_encode(array('data' => $save, 'error' => 'Invalid request. Please do not repeat this request again.'));
            }
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionSetValidationSpentTime() {
        if (Yii::app()->request->isAjaxRequest && Yii::app()->request->isPostRequest) {
            $model = UserTest::model()->findByAttributes(array(
                'id' => $_POST['user_test_id'],
                'user_profile_id' => $this->profiles[RolePrivilege::EXPERT],
                'token' => $_POST['token'],
                'status' => Status::ACTIVE
            ));

            if (!empty($model)) {
                if (!empty($model->spent_time)) {
                    $spent_time = $model->spent_time = $model->spent_time - 1;
                    $model->time_used = $model->time_used + 1;
                    if ($model->save())
                        echo json_encode(array('spentTime' => $spent_time, 'time_used' => $model->time_used));
                }else {
                    $model->time_used = $model->time_used + 1;
                    if ($model->save())
                        echo json_encode(array('time_used' => $model->time_used));
                }
            } else {
                throw new CHttpException(404, 'The requested page does not exist.');
            }
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionValidationView() {
        $model = $this->loadModelExpert();

        $testAnswerModel = new TestAnswer('search');
        $testAnswerModel->unsetAttributes();
        if (isset($_GET['TestAnswer'])) {
            $testAnswerModel->attributes = $_GET['TestAnswer'];
        }
        $testAnswerModel->user_test_id = $model->id;

        $this->render('validation_view', array(
            'model' => $model,
            'testAnswerModel' => $testAnswerModel
        ));
    }

    public function actionValidationDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModelExpertActive()->delete();
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionSetTestVariable() {
        $model = $this->loadModelCompany();
        if (TestVariable::model()->setTestVariable($model->id)) {
            $this->redirect(array('admin/usertest/view', 'id' => $model->id));
        }
    }

}
