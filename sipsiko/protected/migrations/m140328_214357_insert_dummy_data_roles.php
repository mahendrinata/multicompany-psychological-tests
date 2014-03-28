<?php

class m140328_214357_insert_dummy_data_roles extends CDbMigration {

    public function up() {
        $this->truncateTable('roles');
        $row = array(
            array(
                'slug' => RolePrivilege::ADMIN,
                'name' => RolePrivilege::ADMIN,
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => RolePrivilege::EXPERT,
                'name' => RolePrivilege::EXPERT,
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => RolePrivilege::COMPANY,
                'name' => RolePrivilege::COMPANY,
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => RolePrivilege::MEMBER,
                'name' => RolePrivilege::MEMBER,
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => RolePrivilege::GUEST,
                'name' => RolePrivilege::GUEST,
                'description' => '',
                'status' => Status::ACTIVE,
        ));
        foreach ($row as $column) {
            $this->insert('roles', $column);
        }
    }

    public function down() {
        $this->truncateTable('roles');
    }

}
