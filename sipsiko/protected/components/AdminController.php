<?php

class AdminController extends Controller {

    public $layout = '//layouts/column2';
    protected $_model;

    public function init() {
        parent::init();

        Yii::app()->theme = 'backend';
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index', 'view', 'create', 'update', 'admin', 'delete'),
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

}
