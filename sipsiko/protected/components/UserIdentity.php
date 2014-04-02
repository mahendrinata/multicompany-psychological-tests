<?php

class UserIdentity extends CUserIdentity {

    private $_id;
    private $_roles;
    private $_profiles;

    public function authenticate() {
        $user = User::model()->getActiveUserByUsername($this->username);
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (!$user->validatePassword($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {

            $this->_setUserIdentity($user);

            User::model()->afterLogin($user);
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->_id;
    }

    private function _setUserIdentity($user) {
        $this->_id = $user->id;
        $this->setState('username', $user->username);
        $this->setState('email', $user->email);

        $this->_roles = CHtml::listData($user->roles, 'id', 'slug');
        $this->setState('roles', $this->_roles);
        $this->_profiles = array();
        foreach (CHtml::listData($user->user_profiles, 'role_id', 'id') as $key => $val) {
            $this->_profiles[$this->_roles[$key]] = $val;
        }
        $this->setState('user_profiles', $this->_profiles);
        $this->errorCode = self::ERROR_NONE;
    }

}
