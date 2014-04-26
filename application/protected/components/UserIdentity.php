<?php

class UserIdentity extends CUserIdentity {

    private $_id;
    private $_roles;
    private $_accesses;

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

        foreach ($user->CompanyUsers as $key => $companyUser) {
            if ($companyUser->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                $this->_roles['CompanyUsers'][$key] = array(
                    'Company' => array(
                        'id' => $companyUser->Company->id,
                        'name' => $companyUser->Company->name
                    ),
                    'Position' => array(
                        'id' => $companyUser->Position->id,
                        'slug' => $companyUser->Position->slug,
                        'name' => $companyUser->Position->name
                    )
                );

                foreach ($companyUser->Position->PositionAccesses as $positionAccess) {
                    if ($positionAccess->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                        $this->_accesses[$positionAccess->Access->slug] = array(
                            'slug' => $positionAccess->Access->slug,
                            'name' => $positionAccess->Access->name,
                            'url' => $positionAccess->Access->url);
                    }
                }
            }
        }

        foreach ($user->ExpertUsers as $key => $expertUser) {
            if ($expertUser->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                $this->_roles['ExpertUsers'][$key] = array(
                    'Expert' => array(
                        'id' => $expertUser->Expert->id,
                        'name' => $expertUser->Expert->name
                    ),
                    'Position' => array(
                        'id' => $expertUser->Position->id,
                        'slug' => $expertUser->Position->slug,
                        'name' => $expertUser->Position->name
                    )
                );

                foreach ($expertUser->Position->PositionAccesses as $positionAccess) {
                    if ($positionAccess->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                        $this->_accesses[$positionAccess->Access->slug] = array(
                            'slug' => $positionAccess->Access->slug,
                            'name' => $positionAccess->Access->name,
                            'url' => $positionAccess->Access->url);
                    }
                }
            }
        }

        if (!empty($user->Member) && $user->Member->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
            $this->_roles['Member'] = array(
                'id' => $user->Member->id,
                'name' => $user->Member->first_name . ' ' . $user->Member->last_name,
                'first_name' => $user->Member->first_name,
                'last_name' => $user->Member->last_name,
                'Position' => array(
                    'id' => $user->Member->Position->id,
                    'slug' => $user->Member->Position->slug,
                    'name' => $user->Member->Position->name
                )
            );
            foreach ($user->Member->Position->PositionAccesses as $positionAccess) {
                if ($positionAccess->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                    $this->_accesses[$positionAccess->Access->slug] = array(
                        'slug' => $positionAccess->Access->slug,
                        'name' => $positionAccess->Access->name,
                        'url' => $positionAccess->Access->url);
                }
            }
        }

        $this->setState('roles', $this->_roles);
        $this->setState('accesses', $this->_accesses);

        $this->errorCode = self::ERROR_NONE;
    }

}
