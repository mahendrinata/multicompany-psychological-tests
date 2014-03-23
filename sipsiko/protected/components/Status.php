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

}

?>