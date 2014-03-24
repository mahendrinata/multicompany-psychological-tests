<?php

class GuestController extends Controller {
    
    public $layout = '//layouts/frontend';

    public function init() {
        parent::init();

        Yii::app()->theme = 'frontend';
        $this->data['themeBaseUrl'] = Yii::app()->theme->baseUrl;
    }

}
