<?php

abstract class AppActiveRecord extends CActiveRecord {

    public function behaviors() {
        return CMap::mergeArray(
                parent::behaviors(), array(
                'CTimestampBehavior' => array(
                    'class' => 'zii.behaviors.CTimestampBehavior',
                    'createAttribute' => 'created_at',
                    'updateAttribute' => 'updated_at',
                ),
                'ESaveRelatedBehavior' => array(
                    'class' => 'application.components.ESaveRelatedBehavior'),
                'withRelated' => array(
                    'class' => 'ext.WithRelatedBehavior'),
        ));
    }

    public static function slugify($string) {
        $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
        $string = trim($string, '-');
        if (function_exists('iconv')) {
            $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
        }
        $string = strtolower($string);
        $string = preg_replace('~[^-\w]+~', '', $string);
        if (empty($string)) {
            return 'n-a';
        }
        return $string;
    }

    public function findBySlug($slug = null) {
        return $this->findByAttributes(array('slug' => $slug));
    }

    public function findAllActive() {
        return $this->findAllByAttributes(array('status' => Status::ACTIVE));
    }

}
