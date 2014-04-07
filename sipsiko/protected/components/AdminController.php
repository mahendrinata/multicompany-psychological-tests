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

        $registerUrl = array(
            'admin/userprofile/registerexpert',
            'admin/userprofile/registercompany',
            'admin/userprofile/registermember',
        );
        if (!empty($this->_unregisters) && !in_array($this->_url, $registerUrl)) {
            foreach ($this->_unregisters as $role => $unregister) {
                $this->redirect(array('admin/userprofile/register' . strtolower($role)));
            }
        }
    }

    public function getUserProfileId($role) {
        return $this->_profiles[$role];
    }

    public function setStateLogin() {
        $user = User::model()->getActiveUserByUsername(Yii::app()->user->getState('username'));
        $roles = $profiles = $unregisters = array();
        foreach ($user->user_profiles as $profile) {
            $roles[$profile->role->id] = $profile->role->slug;
            $profiles[$profile->role->slug] = $profile->id;
            if (empty($profile->first_name)) {
                $unregisters[$profile->role->slug] = $profile->id;
            }
        }

        Yii::app()->user->setState('roles', $roles);
        Yii::app()->user->setState('user_profiles', $profiles);
        Yii::app()->user->setState('unregisters', $unregisters);
    }

    public function filters() {
        return array(
            'accessControl',
        );
    }
}
