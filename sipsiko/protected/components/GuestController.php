<?php

class GuestController extends Controller {

    public function init() {
        parent::init();

        Yii::app()->theme = 'frontend';
    }

}
