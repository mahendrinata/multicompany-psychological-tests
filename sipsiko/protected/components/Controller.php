<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    protected $postData;
    protected $getData;
    protected $data;

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function init() {
        parent::init();

        $this->postData = $_POST;
        $this->getData = $_GET;
        $this->data['baseUrl'] = Yii::app()->request->baseUrl;
    }

    public function filters() {
        return array(
            'accessControl',
        );
    }

    protected function performAjaxValidation($model, $formId = null, $setValue = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === $formId) {
            if (!empty($setValue)) {
                foreach ($setValue as $mod => $val) {
                    foreach ($val as $k => $v) {
                        $_POST[$mod][$k] = $v;
                    }
                }
            }
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
