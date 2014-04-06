<?php

class AdminController extends Controller {

    public $layout = '//layouts/main';
    protected $_model;
    protected $_roles;
    protected $_profiles;
    protected $_unregisters;
    protected $_url;

    public function init() {
        parent::init();

        if (empty(Yii::app()->user->getId())) {
            $this->redirect(array('site/index'));
        }

        Yii::app()->theme = 'proui';
        
        $this->_roles = Yii::app()->user->getState('roles');        
        $this->_profiles = Yii::app()->user->getState('user_profiles');
        $this->_unregisters = Yii::app()->user->getState('unregisters');
        
        $this->_url = Yii::app()->urlManager->parseUrl(Yii::app()->request);
        
        if (empty($this->_profiles) && ($this->_url != 'admin/userprofile/choose')) {
            $this->redirect(array('admin/userprofile/choose'));
        }
        
        if(!empty($this->_unregisters)){
            
        }
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
