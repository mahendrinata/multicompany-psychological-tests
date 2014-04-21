<?php

class UserProfileController extends AdminController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'member', 'company', 'expert', 'createMember', 'update', 'delete'),
                'roles' => array(RolePrivilege::ADMIN),
            ),
            array('allow',
                'actions' => array('registerCompany'),
                'roles' => array(RolePrivilege::COMPANY)
            ),
            array('allow',
                'actions' => array('registerExpert'),
                'roles' => array(RolePrivilege::EXPERT)
            ),
            array('allow',
                'actions' => array('registerMember'),
                'roles' => array(RolePrivilege::MEMBER)
            ),
            array('allow',
                'actions' => array('choose', 'change'),
                'users' => array('@')
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = UserProfile::model()->findbyPk($_GET['id']);
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

    public function actionCreateMember() {
        $model = new UserProfile;

        $this->performAjaxValidation($model, 'user-profile-form');

        if (isset($_POST['UserProfile'])) {
            $model->attributes = $_POST['UserProfile'];
            $model->photo = CUploadedFile::getInstance($model, 'photo');
//            print_r($model->photo);die;
            if (is_object($model->photo)) {
                $user = User::model()->findByPk($model->user_id);
                $path = Yii::app()->basePath . '/../images/users/' . $user->username . '/';
                if (!is_dir($path))
                    mkdir($path, 0775, true);

                $name = $path . $model->photo->getName();
                $model->photo->saveAs($name);

                $image = Yii::app()->image->load($name);
                $image->resize(64, 64);
                $image->save();
            }

            if ($model->save())
                $this->redirect(array('admin/userprofile/index'));
        }

        $this->render('create_member', array(
            'model' => $model,
        ));
    }

    public function actionUpdateMember() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model, 'user-profile-form');

        if (isset($_POST['UserProfile'])) {
            $model->attributes = $_POST['UserProfile'];
            if ($model->save())
                $this->redirect(array('admin/userprofile/index'));
        }

        $this->render('update_member', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $model = $this->loadModel();
            $model->status = Status::VOID;
            $model->save();

            if (!isset($_GET['ajax']))
                $this->redirect(array('admin/userprofile/index'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionMember() {
        $model = new UserProfile('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserProfile']))
            $model->attributes = $_GET['UserProfile'];

        $role = Role::model()->find(array(
            'select' => 'id',
            'condition' => 'slug=:slug',
            'params' => array(':slug' => RolePrivilege::MEMBER),
        ));
        $model->role_id = $role->id;

        $this->render('member', array(
            'model' => $model,
        ));
    }

    public function actionExpert() {
        $model = new UserProfile('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserProfile']))
            $model->attributes = $_GET['UserProfile'];

        $role = Role::model()->find(array(
            'select' => 'id',
            'condition' => 'slug=:slug',
            'params' => array(':slug' => RolePrivilege::EXPERT),
        ));
        $model->role_id = $role->id;

        $this->render('expert', array(
            'model' => $model,
        ));
    }

    public function actionCompany() {
        $model = new UserProfile('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserProfile']))
            $model->attributes = $_GET['UserProfile'];

        $role = Role::model()->find(array(
            'select' => 'id',
            'condition' => 'slug=:slug',
            'params' => array(':slug' => RolePrivilege::COMPANY),
        ));
        $model->role_id = $role->id;

        $this->render('company', array(
            'model' => $model,
        ));
    }

    public function actionChoose() {
        if (isset($_POST['UserProfile'])) {
            foreach ($_POST['UserProfile']['roles'] as $role) {
                $roleModel = Role::model()->findBySlug($role);

                if (empty(UserProfile::model()->findByAttributes(array('role_id' => $roleModel->id, 'user_id' => Yii::app()->user->id)))) {
                    $userProfileModel = new UserProfile;
                    $userProfileModel->role_id = $roleModel->id;
                    $userProfileModel->user_id = Yii::app()->user->id;
                    $userProfileModel->status = Status::ACTIVE;
                    $userProfileModel->save(false);
                }
            }

            $this->setStateLogin();
            $this->redirect(array('admin/dashboard'));
        }


        $this->render('choose');
    }

    public function actionRegisterMember() {
        $model = UserProfile::model()->findByPk($this->profiles[RolePrivilege::MEMBER]);

        $this->performAjaxValidation($model, 'user-profile-form');

        if (isset($_POST['UserProfile'])) {
            $model->attributes = $_POST['UserProfile'];
            if ($model->save()) {
                $this->setStateLogin();
                $this->redirect(array('admin/dashboard/index'));
            }
        }

        $this->render('register_member', array(
            'model' => $model,
        ));
    }

    public function actionRegisterExpert() {
        $model = UserProfile::model()->findByPk($this->profiles[RolePrivilege::EXPERT]);

        $this->performAjaxValidation($model, 'user-profile-form');

        if (isset($_POST['UserProfile'])) {
            $model->attributes = $_POST['UserProfile'];
            if ($model->save()) {
                $this->setStateLogin();
                $this->redirect(array('admin/dashboard/index'));
            }
        }

        $this->render('register_expert', array(
            'model' => $model,
        ));
    }

    public function actionRegisterCompany() {
        $model = UserProfile::model()->findByPk($this->profiles[RolePrivilege::COMPANY]);

        $this->performAjaxValidation($model, 'user-profile-form');

        if (isset($_POST['UserProfile'])) {
            $model->attributes = $_POST['UserProfile'];
            if ($model->save()) {
                $this->setStateLogin();
                $this->redirect(array('admin/dashboard/index'));
            }
        }

        $this->render('register_company', array(
            'model' => $model,
        ));
    }

    public function actionChange(){
        $model = User::model()->findByPk(Yii::app()->user->id);
        
        if(isset($_POST['User'])){
            
        }
        
        $this->render('change', array(
            'model' => $model
        ));
    }
}
