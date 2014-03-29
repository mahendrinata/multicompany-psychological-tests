<?php

class m140328_214357_insert_dummy_data_roles extends CDbMigration {

    public function up() {
        $row = array(
            array(
                'slug' => RolePrivilege::ADMIN,
                'name' => RolePrivilege::ADMIN,
                'description' => '',
            ),
            array(
                'slug' => RolePrivilege::EXPERT,
                'name' => RolePrivilege::EXPERT,
                'description' => '',
            ),
            array(
                'slug' => RolePrivilege::COMPANY,
                'name' => RolePrivilege::COMPANY,
                'description' => '',
            ),
            array(
                'slug' => RolePrivilege::MEMBER,
                'name' => RolePrivilege::MEMBER,
                'description' => '',
            ),
            array(
                'slug' => RolePrivilege::GUEST,
                'name' => RolePrivilege::GUEST,
                'description' => '',
        ));
        foreach ($row as $column) {
            $column['status'] = Status::ACTIVE;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $this->insert('roles', $column);
        }
    }

    public function down() {
        
    }

}
