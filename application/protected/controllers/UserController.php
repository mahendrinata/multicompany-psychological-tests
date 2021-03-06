<?php

class UserController extends GuestController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('login', 'logout', 'register'),
                'users' => array('*'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionLogin() {
        $model = new LoginForm;

        $this->performAjaxValidation($model, 'login-form');

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate() && $model->login())
                $this->redirect(array('admin/dashboard/index'));
        }
        $this->data['model'] = $model;
        $this->render('login', $this->data);
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(array('user/login'));
    }

    public function actionRegister() {
        $model = new User;

        $this->performAjaxValidation($model, 'user-form', array('User' => array('status' => Status::ACTIVE)));

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->status = Status::ACTIVE;
            if ($model->save())
                $this->redirect(array('user/login'));
        }

        $this->data['model'] = $model;
        $this->render('register', $this->data);
    }

}
