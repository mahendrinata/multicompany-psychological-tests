<?php

class Conclusion {

    const ORDERER = 'ORDERER';
    const MBTI = 'MBTI';
    const DISC = 'DISC';

    public static function get_list() {
        return array(
            self::ORDERER,
            self::MBTI,
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