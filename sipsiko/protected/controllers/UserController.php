<?php

class UserController extends GuestController {

    public function actionLogin() {
        $model = new LoginForm;

        $this->performAjaxValidation($model, 'login-form');

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        $this->render('login', array('model' => $model));
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    
    public function actionRegister(){
        
    }

}
