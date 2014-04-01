<?php

class AdminController extends Controller {

    public $layout = '//layouts/main';
    protected $_model;

    public function init() {
        parent::init();

        Yii::app()->theme = 'proui';
    }

//    public function filters() {
//        return array(
//            'accessControl',
//        );
//    }

//    public function accessRules() {
//        return array(
//            array('allow',
//                'actions' => array('index', 'view', 'create', 'update', 'admin', 'delete'),
//                'users' => array('@'),
//            ),
//            array('deny',
//                'users' => array('*'),
//            ),
//        );
//    }

}
