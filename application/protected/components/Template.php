<?php

abstract class Template {

    const MULTIPLE_CHOICE = 'MULTIPLE-CHOICE';
    const DUPLICATE_MULTIPLE_CHOICE = 'DUPLICATE-MULTIPLE-CHOICE';

    public static function getListTemplate() {
        $list = array(
            self::MULTIPLE_CHOICE,
            self::DUPLICATE_MULTIPLE_CHOICE
        );
        $output = array();
        for ($i = 0; $i < count($list); $i++) {
            $output[($i + 1)] = $list[$i];
        }
        return $output;
    }

    public static function getMapTemplate() {
        $map = array();
        foreach (self::getListTemplate() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

    public static function getTemplateFileName($template = NULL, $folder = NULL) {
        return $folder . '_' . strtolower(str_replace('-', '_', $template));
    }

    public static function getSetAnswerUrlByRole($role) {
        $url = array(
            Role::model()->getRoleIdBySlug(Role::MEMBER) => 'admin/usertest/savetestanswer',
            Role::model()->getRoleIdBySlug(Role::EXPERT) => 'admin/usertest/savevalidationanswer'
        );
        return $url[$role];
    }

}

?>