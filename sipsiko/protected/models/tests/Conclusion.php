<?php

class Conclusion {

    const SINGLE = 'SINGLE';
    const PAIR = 'PAIR';
    const PAIR_ORDERER = 'PAIR_ORDERER';
    const DISC = 'DISC';

    public static function get_list() {
        return array(
            self::SINGLE,
            self::PAIR,
            self::DISC,
        );
    }

    public static function get_map() {
        $map = array();
        foreach (self::get_list() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

}

?>