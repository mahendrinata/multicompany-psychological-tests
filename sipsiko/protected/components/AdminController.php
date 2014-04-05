<?php

class AdminController extends Controller {

    public $layout = '//layouts/main';
    protected $_model;
    protected $_profiles;

    public function init() {
        parent::init();
        
        if(empty(Yii::app()->user->getId())){
            $this->redirect(array('site/index'));
        }

        Yii::app()->theme = 'proui';
        $this->_profiles = Yii::app()->user->getState('user_profiles');
    }

    public function getUserProfileId($role) {
        return $this->_profiles[$role];
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
