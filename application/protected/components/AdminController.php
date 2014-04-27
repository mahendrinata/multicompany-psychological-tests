<?php

class AdminController extends Controller {

    public $layout = '//layouts/main';
    protected $_model;
    public $roles;
    public $accesses;
    protected $_unregisters;
    protected $_url;
    protected $_userId;

    public function init() {
        parent::init();

        AccessWebUser::call()->checkUserAccess();

        $this->_userId = Yii::app()->user->getId();
        if (empty($this->_userId)) {
            $this->redirect(array('user/logout'));
        }

        Yii::app()->theme = 'proui';
    }

    public function getUserProfileId($role) {
        return $this->profiles[$role];
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

    public function validateGetRequest($ids = 'id') {
        if (is_array($ids)) {
            foreach ($ids as $id) {
                if (!isset($_GET[$id]) || $_GET[$id] == '') {
                    throw new CHttpException(404, 'The requested page does not exist.');
                }
            }
        } else {
            if (!isset($_GET[$ids]) || $_GET[$ids] == '') {
                throw new CHttpException(404, 'The requested page does not exist.');
            }
        }
    }

}
