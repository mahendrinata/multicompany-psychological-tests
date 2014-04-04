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

    public function getRolePrivilegeStatus($role) {
        return in_array($role, $this->_roles);
    }

    public function getUserProfileId($role) {
        if ($this->getRolePrivilegeStatus($role)) {
            return $this->_profiles[$role];
        }
        return null;
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
