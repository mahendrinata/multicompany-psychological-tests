<?php

abstract class RolePrivilege {

    const ADMIN = 'ADMIN';
    const EXPERT = 'EXPERT';
    const COMPANY = 'COMPANY';
    const MEMBER = 'MEMBER';
    const GUEST = 'GUEST';

    public static function get_list() {
        return array(
            self::ADMIN,
            self::EXPERT,
            self::COMPANY,
            self::MEMBER,
            self::GUEST
        );
    }

    public static function get_priority() {
        $roles = self::get_list();
        foreach ($roles as $key => $value) {
            $priorities[$value] = $key;
        }
        return $priorities;
    }

    public static function get_map() {
        $map = array();
        foreach (self::get_list() as $role) {
            $map[$role] = $role;
        }
        return $map;
    }

    public static function get_access($role = NULL) {
        $priorities = self::get_priority();
        $accesses = array();
        foreach ($priorities as $key => $value) {
            if ($priorities[$role] >= $value) {
                $accesses[$key] = $value;
            }
        }
        return $accesses;
    }

    public static function get_user_profiles_role() {
        return array(
            self::EXPERT => self::EXPERT,
            self::COMPANY => self::COMPANY,
            self::MEMBER => self::MEMBER
        );
    }

}

?>