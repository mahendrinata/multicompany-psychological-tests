<?php

class Conclusion {

    const SINGLE = 'SINGLE';
    const PAIR = 'PAIR';
    const PAIR_ORDERER = 'PAIR_ORDERER';
    const DISC = 'DISC';

    public static function getList() {
        return array(
            self::SINGLE,
            self::PAIR,
            self::PAIR_ORDERER,
            self::DISC,
        );
    }

    public static function getMap() {
        $map = array();
        foreach (self::getList() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

}

?>