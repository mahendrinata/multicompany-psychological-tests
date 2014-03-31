<?php

class DashboardController extends AdminController {

    public function actionIndex() {
        $model = new User('search');
        
        $this->render('index', array(
            'model' => $model,
        ));
    }

}
