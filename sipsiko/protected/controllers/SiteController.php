<?php

class SiteController extends GuestController {

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
