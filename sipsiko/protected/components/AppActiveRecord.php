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
                'activerecord-relation' => array(
                    'class' => 'ext.EActiveRecordRelationBehavior'),
        ));
    }

    /**
     * Modifies a string to remove all non ASCII characters and spaces.
     */
    static public function slugify($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv')) {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    function findBySlug($slug = null) {
        return $this->findByAttributes(array('slug' => $slug));
    }

}
