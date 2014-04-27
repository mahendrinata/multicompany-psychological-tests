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
                $this->_roles['Companies'][$companyUser->Company->id]['id'] = $companyUser->Company->id;
                $this->_roles['Companies'][$companyUser->Company->id]['name'] = $companyUser->Company->name;
                $this->_roles['Companies'][$companyUser->Company->id]['Positions'][$companyUser->Position->id]['id'] = $companyUser->Position->id;
                $this->_roles['Companies'][$companyUser->Company->id]['Positions'][$companyUser->Position->id]['slug'] = $companyUser->Position->slug;
                $this->_roles['Companies'][$companyUser->Company->id]['Positions'][$companyUser->Position->id]['name'] = $companyUser->Position->name;

                foreach ($companyUser->Position->PositionAccesses as $positionAccess) {
                    if ($positionAccess->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {     
                        $this->_accesses[$positionAccess->Access->slug]['slug'] = $positionAccess->Access->slug;
                        $this->_accesses[$positionAccess->Access->slug]['name'] = $positionAccess->Access->name;
                        $this->_accesses[$positionAccess->Access->slug]['url'] = $positionAccess->Access->url;
                        $this->_accesses[$positionAccess->Access->slug]['params'] = $positionAccess->Access->params;
                        $this->_accesses[$positionAccess->Access->slug]['Companies'][$companyUser->Company->id] = $companyUser->Company->id;
                    }
                }
            }
        }

        foreach ($user->ExpertUsers as $key => $expertUser) {
            if ($expertUser->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                $this->_roles['Experts'][$expertUser->Expert->id]['id'] = $expertUser->Expert->id;
                $this->_roles['Experts'][$expertUser->Expert->id]['name'] = $expertUser->Expert->name;
                $this->_roles['Experts'][$expertUser->Expert->id]['Positions'][$expertUser->Position->id]['id'] = $expertUser->Position->id;
                $this->_roles['Experts'][$expertUser->Expert->id]['Positions'][$expertUser->Position->id]['slug'] = $expertUser->Position->slug;
                $this->_roles['Experts'][$expertUser->Expert->id]['Positions'][$expertUser->Position->id]['name'] = $expertUser->Position->name;
                
                foreach ($expertUser->Position->PositionAccesses as $positionAccess) {
                    if ($positionAccess->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                        $this->_accesses[$positionAccess->Access->slug]['slug'] = $positionAccess->Access->slug;
                        $this->_accesses[$positionAccess->Access->slug]['name'] = $positionAccess->Access->name;
                        $this->_accesses[$positionAccess->Access->slug]['url'] = $positionAccess->Access->url;
                        $this->_accesses[$positionAccess->Access->slug]['params'] = $positionAccess->Access->params;
                        $this->_accesses[$positionAccess->Access->slug]['Experts'][$expertUser->Expert->id] = $expertUser->Expert->id;
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
                    'name' => $user->Member->Position->name,
                    'Role' => array(
                        'id' => $user->Member->Position->Role->id,
                        'slug' => $user->Member->Position->Role->slug,
                        'name' => $user->Member->Position->Role->name)
                )
            );
            foreach ($user->Member->Position->PositionAccesses as $positionAccess) {
                if ($positionAccess->status_id == Status::model()->getStatusIdBySlug(Status::ACTIVE)) {
                        $this->_accesses[$positionAccess->Access->slug]['slug'] = $positionAccess->Access->slug;
                        $this->_accesses[$positionAccess->Access->slug]['name'] = $positionAccess->Access->name;
                        $this->_accesses[$positionAccess->Access->slug]['url'] = $positionAccess->Access->url;
                        $this->_accesses[$positionAccess->Access->slug]['params'] = $positionAccess->Access->params;
                        $this->_accesses[$positionAccess->Access->slug]['Member'] = $user->Member->id;
                }
            }
        }

        $this->setState('roles', $this->_roles);
        $this->setState('accesses', $this->_accesses);

        $this->errorCode = self::ERROR_NONE;
    }

}
