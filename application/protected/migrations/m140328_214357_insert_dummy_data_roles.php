<?php

class m140328_214357_insert_dummy_data_roles extends CDbMigration {

    public function up() {
        $row = array(
            array(
                'slug' => Role::ADMIN,
                'name' => ucwords(Role::ADMIN),
                'description' => '',
            ),
            array(
                'slug' => Role::EXPERT,
                'name' => ucwords(Role::EXPERT),
                'description' => '',
            ),
            array(
                'slug' => Role::COMPANY,
                'name' => ucwords(Role::COMPANY),
                'description' => '',
            ),
            array(
                'slug' => Role::MEMBER,
                'name' => ucwords(Role::MEMBER),
                'description' => '',
            ),
            array(
                'slug' => Role::GUEST,
                'name' => ucwords(Role::GUEST),
                'description' => '',
        ));
        foreach ($row as $column) {
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['created_at'] = date('Y-m-d H:i:s');

            $this->insert('roles', $column);
        }
    }

    public function down() {
        $this->truncateTable('roles');
    }

}
