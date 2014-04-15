<?php

abstract class Status {

    const DRAFT = 'DRAFT';
    const ACTIVE = 'ACTIVE';
    const INACTIVE = 'INACTIVE';
    const FINISH = 'FINISH';
    const VOID = 'VOID';

    public static function get_list() {
        return array(
            self::DRAFT,
            self::ACTIVE,
            self::INACTIVE,
            self::FINISH,
            self::VOID
        );
    }

    public static function get_map() {
        $map = array();
        foreach (self::get_list() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

    public static function get_label($status) {
        $label = array(
            self::DRAFT => 'label-default',
            self::ACTIVE => 'label-success',
            self::INACTIVE => 'label-warning',
            self::FINISH => 'label-info',
            self::VOID => 'label-danger',
        );
        if (in_array($status, self::get_list())) {
            return $label[$status];
        } else {
            return null;
        }
    }

    public static function get_tag_label($status) {
        return CHtml::tag("span", array("class" => "label " . self::get_label($status)), $status);
    }

}

?>