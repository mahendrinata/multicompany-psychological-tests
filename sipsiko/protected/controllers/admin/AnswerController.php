<?php

class AnswerController extends AdminController {

    public function actionCreate() {
        $id = $_GET['id'] + 1;
        $this->renderPartial('create', array('id' => $id));
    }
}
