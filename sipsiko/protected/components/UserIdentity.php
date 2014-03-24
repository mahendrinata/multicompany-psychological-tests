<?php

class UserIdentity extends CUserIdentity {

    private $_id;

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
        $roles = array();
        foreach ($user->roles as $role) {
            $roles[] = $role->slug;
        }
        $this->setState('roles', $roles);
        $this->errorCode = self::ERROR_NONE;
    }

}
