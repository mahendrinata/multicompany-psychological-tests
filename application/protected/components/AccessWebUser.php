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
        $this->_roles =  Yii::app()->user->getState('roles');
        $this->_accesses =  Yii::app()->user->getState('accesses');
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

    public function link($name, $url = array(), $htmlOption = array()) {
        if (isset($url[0]) && isset($this->_accesses[$url[0]])) {
            return CHtml::link($name, $url, $htmlOption);
        }
        return null;
    }

}

?>