<?php

class UserProfileController extends AdminController {

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

    public function actionCreate() {
        $model = new UserProfile;

        $this->performAjaxValidation($model, 'user-profile-form');

        if (isset($_POST['UserProfile'])) {
            $model->attributes = $_POST['UserProfile'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate() {
        $model = $this->loadModel();

        $this->performAjaxValidation($model, 'user-profile-form');

        if (isset($_POST['UserProfile'])) {
            $model->attributes = $_POST['UserProfile'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel()->delete();

            if (!isset($_GET['ajax']))
                $this->redirect(array('index'));
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

}
