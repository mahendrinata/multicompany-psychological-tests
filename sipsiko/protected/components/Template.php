<?php

abstract class Template {

    const MULTIPLE_CHOICE = 'MULTIPLE-CHOICE';
    const DUPLICATE_MULTIPLE_CHOICE = 'DUPLICATE-MULTIPLE-CHOICE';

    public static function getList() {
        return array(
            self::MULTIPLE_CHOICE,
            self::DUPLICATE_MULTIPLE_CHOICE
        );
    }

    public static function getMap() {
        $map = array();
        foreach (self::getList() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

    public static function getTemplateFileName($template = NULL, $folder = NULL) {
        return $folder . '_' . strtolower(str_replace('-', '_', $template));
    }

    public static function getSetAnswerUrlByRole($role) {
        $url = array(
            RolePrivilege::MEMBER => 'admin/usertest/savetestanswer',
            RolePrivilege::EXPERT => 'admin/usertest/savevalidationanswer'
        );
        return $url[$role];
    }

}

?>