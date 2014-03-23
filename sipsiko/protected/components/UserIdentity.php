<?php

class UserIdentity extends CUserIdentity {

    private $_id;
    private $_role;

    public function authenticate() {
        $user = User::model()->with('user_profiles')->find('LOWER(username)=?', array(strtolower($this->username)));
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (!$user->validatePassword($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $user->id;
            $this->username = $user->username;
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->_id;
    }
    
    public function getRole(){
        return $this->_role;
    }

}
