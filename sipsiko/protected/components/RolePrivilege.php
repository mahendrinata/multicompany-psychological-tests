<?php

abstract class RolePrivilege {

    const ADMIN = 'ADMIN';
    const EXPERT = 'EXPERT';
    const COMPANY = 'COMPANY';
    const MEMBER = 'MEMBER';
    const GUEST = 'GUEST';

    public static function get_list() {
        return array(
            RolePrivilege::ADMIN,
            RolePrivilege::EXPERT,
            RolePrivilege::COMPANY,
            RolePrivilege::MEMBER,
            RolePrivilege::GUEST
        );
    }

    public static function get_priority() {
        $roles = RolePrivilege::get_list();
        foreach ($roles as $key => $value) {
            $priorities[$value] = $key;
        }
        return $priorities;
    }

    public static function get_map() {
        $map = array();
        foreach (Status::get_list() as $status) {
            $map[$status] = $status;
        }
        return $map;
    }

    public static function get_access($role = NULL) {
        $priorities = RolePrivilege::get_priority();
        $accesses = array();
        foreach ($priorities as $key => $value) {
            if ($priorities[$role] >= $value) {
                $accesses[$key] = $value;
            }
        }
        return $accesses;
    }

}

?>