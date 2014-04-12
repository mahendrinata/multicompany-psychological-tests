<?php

class SiteController extends GuestController {

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'error'),
                'users' => array('*'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex() {
        $this->render('index', $this->data);
    }
    
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}
