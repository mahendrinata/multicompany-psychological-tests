<?php

class StringArray {

    public static function toStringList($data = array(), $value = NULL, $parentOptions = array(), $childrenOptions = array()) {
        $list = '';
        foreach ($data as $row) {
            $list .= CHtml::tag('li', $childrenOptions, $row->{$value});
        }
        return CHtml::tag('ul', $parentOptions, $list);
    }

}

?>