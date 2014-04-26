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
        $this->_roles = $this->getState('roles');
        $this->_accesses = $this->getState('accesses');
        $this->_url = Yii::app()->request->getUrl();
    }

    public function checkUserAccess() {
        $arraySlug = Access::model()->slugify($this->_url);
        if (count($arraySlug) > 0) {
            if (in_array($arraySlug[0], array('admin'))) {
                $slug = implode('-', array($arraySlug[0], $arraySlug[2], $arraySlug[3]));
            } else {
                $slug = implode('-', array($arraySlug[0], $arraySlug[2]));
            }
            $this->_accesses[$slug];
        }
        die;
    }

}

?>