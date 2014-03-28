<?php

class m140328_214357_insert_dummy_data_roles extends CDbMigration {

    public function up() {
        $row = array(
            array(
                'slug' => Role::model()->slugify(RolePrivilege::ADMIN),
                'name' => RolePrivilege::ADMIN,
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify(RolePrivilege::EXPERT),
                'name' => RolePrivilege::EXPERT,
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify(RolePrivilege::COMPANY),
                'name' => Role::model()->slugify(RolePrivilege::COMPANY),
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify(RolePrivilege::MEMBER),
                'name' => RolePrivilege::MEMBER,
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify(RolePrivilege::GUEST),
                'name' => RolePrivilege::GUEST,
                'description' => '',
                'status' => Status::ACTIVE,
        ));
        foreach ($row as $column) {
            $this->insert('roles', $column);
        }
    }

    public function down() {
    }

}
