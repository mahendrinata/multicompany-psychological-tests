<?php

class AdminController extends Controller {
    
    public $layout = '//layouts/default';
    private $_model;

    public function init() {
        parent::init();

        Yii::app()->theme = 'backend';
    }

}
