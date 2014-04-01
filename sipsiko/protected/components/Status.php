<?php

abstract class Status {

    const ACTIVE = 'ACTIVE';
    const INACTIVE = 'INACTIVE';
    const VOID = 'VOID';

    public static function get_list() {
        return array(
            Status::ACTIVE,
            Status::INACTIVE,
            Status::VOID
        );
    }

    public static function get_map() {
        $map = array();
        foreach (Status::get_list() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

    public static function get_label($status) {
        $label = array(
            Status::ACTIVE => 'label-success',
            Status::INACTIVE => 'label-warning',
            Status::VOID => 'label-danger',
        );
        return $label[$status];
    }

    public static function get_tag_label($status) {
        return CHtml::tag("span", array("class" => "label " . Status::get_label($status)), $status);
    }

}

?>