<?php

class AccessWebUser extends CWebUser {

    private $_roles;
    private $_accesses;
    private $_url;

    public static function call($className = __CLASS__) {
        $model = new $className(null);
        $model->_init();
        return $model;
    }

    private function _init() {
        $this->_roles = Yii::app()->user->getState('roles');
        $this->_accesses = Yii::app()->user->getState('accesses');
        $this->_url = Yii::app()->urlManager->parseUrl(Yii::app()->request);
    }

    public function __call($name, $parameters) {
        parent::__call($name, $parameters);
    }

    public function slugifyUrl($url) {
        return implode('-', array_slice(explode('-', Access::slugify($url)), 0, 3));
    }

    public function checkUserAccess() {
        $slug = $this->slugifyUrl($this->_url);
        if (isset($this->_accesses[$slug])) {
            $params = explode(';', $this->_accesses[$slug]['params']);
            foreach ($params as $param) {
                $value = explode(':', $param);
                if (count($value) == 2 && ($value[1] == 'true' || $value[1] == 1)) {
                    $paramVal = Yii::app()->getRequest()->getQuery($value[0]);
                    if (empty($paramVal)) {
                        throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
                    }
                }
            }
        } else {
            if (!empty($this->_accesses))
                throw new CHttpException(404, 'The requested page does not exist.');
        }
    }

    public function checkCompanyAccess() {
        return (!isset($this->_roles['Companies']) || empty($this->_roles['Companies'])) ? false : true;
    }

    public function checkExpertAccess() {
        return (!isset($this->_roles['Experts']) || empty($this->_roles['Experts'])) ? false : true;
    }

    public function checkMemberAccess() {
        return (isset($this->_roles['Member']) && !empty($this->_roles['Member']) && $this->_roles['Member']['Position']['Role']['id'] == Role::model()->getRoleIdBySlug(Role::MEMBER)) ? true : false;
    }

    public function checkAdminAccess() {
        return (isset($this->_roles['Member']) && !empty($this->_roles['Member']) && $this->_roles['Member']['Position']['Role']['id'] == Role::model()->getRoleIdBySlug(Role::ADMIN)) ? true : false;
    }

    public function getCompanyIds($position = false) {
        $output = array();
        foreach ($this->_roles['Companies'] as $company) {
            if ($position) {
                $pos = array();
                foreach ($company['Positions'] as $val) {
                    $pos[] = $val['id'];
                }
                $output[] = array('company_id' => $company['id'], 'position_id' => $pos);
            } else {
                $output[] = $company['id'];
            }
        }
        return $output;
    }

    public function getActiveCompanyList() {
        $output = array();
        foreach ($this->_roles['Companies'] as $company) {
            $output[$company['id']] = $company['name'];
        }
        return $output;
    }

    public function getExpertIds($position = false) {
        $output = array();
        foreach ($this->_roles['Experts'] as $expert) {
            if ($position) {
                $pos = array();
                foreach ($expert['Positions'] as $val) {
                    $pos[] = $val['id'];
                }
                $output[] = array('expert_id' => $expert['id'], 'position_id' => $pos);
            } else {
                $output[] = $expert['id'];
            }
        }
        return $output;
    }

    public function getActiveExpertList() {
        $output = array();
        foreach ($this->_roles['Experts'] as $expert) {
            $output[$expert['id']] = $expert['name'];
        }
        return $output;
    }

    public function getMemberId($position = false) {
        $output = null;
        if (isset($this->_roles['Member']) && !empty($this->_roles['Member']) && $this->_roles['Member']['Position']['Role']['id'] == Role::model()->getRoleIdBySlug(Role::MEMBER)) {
            if ($position)
                $output = array('member_id' => $this->_roles['Member']['id'], 'position_id' => $this->_roles['Member']['Position']['id']);
            else
                $output = $this->_roles['Member']['id'];
        }
        return $output;
    }

    public function getAdminId($position = false) {
        $output = null;
        if (isset($this->_roles['Member']) && !empty($this->_roles['Member']) && $this->_roles['Member']['Position']['Role']['id'] == Role::model()->getRoleIdBySlug(Role::ADMIN)) {
            if ($position)
                $output = array('member_id' => $this->_roles['Member']['id'], 'position_id' => $this->_roles['Member']['Position']['id']);
            else
                $output = $this->_roles['Member']['id'];
        }
        return $output;
    }

    public function getExpertIdsFromAccess($access) {
        $access = $this->slugifyUrl($access);
        return (isset($this->_accesses[$access]['Experts'])) ? $this->_accesses[$access]['Experts'] : array();
    }

    public function getCompanyIdsFromAccess($access) {
        $access = $this->slugifyUrl($access);
        return (isset($this->_accesses[$access]['Company'])) ? $this->_accesses[$access]['Experts'] : array();
    }

    public function getMemberIdFromAccess($access) {
        $access = $this->slugifyUrl($access);
        return (isset($this->_accesses[$access]['Experts'])) ? $this->_accesses[$access]['Experts'] : null;
    }

    public function checkAccessAndExpertId($access, $experId) {
        $access = $this->slugifyUrl($access);
        return (isset($this->_accesses[$access]['Experts'][$experId])) ? $this->_accesses[$access]['Experts'][$experId] : false;
    }

    public function checkAccessAndCompanyId($access, $companyId) {
        $access = $this->slugifyUrl($access);
        return (isset($this->_accesses[$access]['Copanies'][$companyId])) ? $this->_accesses[$access]['Experts'][$companyId] : false;
    }

    public function link($name, $url = array(), $htmlOption = array()) {
        if (isset($url[0])) {
            $access = $this->slugifyUrl($url[0]);
            if (isset($this->_accesses[$access])) {
                return CHtml::link($name, $url, $htmlOption);
            }
        }
        return null;
    }

}

?>