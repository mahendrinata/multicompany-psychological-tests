<?php

class Conclusion {

    const SINGLE = 'SINGLE';
    const PAIR = 'PAIR';
    const PAIR_ORDERER = 'PAIR_ORDERER';
    const DISC = 'DISC';

    public static function getListConclusion() {
        $list = array(
            self::SINGLE,
            self::PAIR,
            self::PAIR_ORDERER,
            self::DISC,
        );
        $output = array();
        for ($i = 0; $i < count($list); $i++) {
            $output[($i + 1)] = $list[$i];
        }
        return $output;
    }

    public static function getMapConclusion() {
        $map = array();
        foreach (self::getListConclusion() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

    public static function getConclusionIdBySlug($slug) {
        return array_search($slug, self::getListConclusion());
    }

}

?>