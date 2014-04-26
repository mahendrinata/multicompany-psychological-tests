<?php

class AccessWebUser extends CWebUser {

    private $_roles;
    private $_accesses;
    private $_companyAccesses;
    private $_expertAccesses;
    private $_url;

    public static function call($className = __CLASS__) {
        $model = new $className(null);
        $model->_init();
        return $model;
    }

    private function _init() {
        $this->_roles = Yii::app()->user->getState('roles');
        $this->_accesses = Yii::app()->user->getState('accesses');
        $this->_companyAccesses = Yii::app()->user->getState('companyAccesses');
        $this->_expertAccesses = Yii::app()->user->getState('expertAccesses');
        $this->_url = Yii::app()->urlManager->parseUrl(Yii::app()->request);
    }

    public function checkUserAccess() {
        $slug = Access::slugify($this->_url);
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
            throw new CHttpException(404, 'The requested page does not exist.');
        }
    }

    public function checkCompanyAccess() {
        return (!isset($this->_roles['CompanyUsers']) || empty($this->_roles['CompanyUsers'])) ? false : true;
    }

    public function checkExpertAccess() {
        return (!isset($this->_roles['ExpertUsers']) || empty($this->_roles['ExpertUsers'])) ? false : true;
    }

    public function checkMemberAccess() {
        return (isset($this->_roles['Member']) && !empty($this->_roles['Member']) && $this->_roles['Member']['Position']['Role']['id'] == Role::model()->getRoleIdBySlug(Role::MEMBER)) ? true : false;
    }

    public function checkAdminAccess() {
        return (isset($this->_roles['Member']) && !empty($this->_roles['Member']) && $this->_roles['Member']['Position']['Role']['id'] == Role::model()->getRoleIdBySlug(Role::ADMIN)) ? true : false;
    }

    public function getCompanyIds($position = false) {
        $output = array();
        foreach ($this->_roles['CompanyUsers'] as $companyUser) {
            if ($position)
                $output[] = array('company_id' => $companyUser['id'], 'position_id' => $companyUser['Position']['id']);
            else
                $output[] = $companyUser['id'];
        }
        return $output;
    }

    public function getExpertIds($position = false) {
        $output = array();
        foreach ($this->_roles['ExpertUsers'] as $expertUser) {
            if ($position)
                $output[] = array('expert_id' => $expertUser['id'], 'position_id' => $expertUser['Position']['id']);
            else
                $output[] = $expertUser['id'];
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

    public function link($name, $url = array(), $htmlOption = array()) {
        if (isset($url[0]) && isset($this->_accesses[$url[0]])) {
            return CHtml::link($name, $url, $htmlOption);
        }
        return null;
    }

}

?>