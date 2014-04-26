<?php

class m140328_214409_insert_dummy_data_positions extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'admin'));
        $row = array(
            array(
                'slug' => Role::ADMIN . '-' . Position::ADMIN,
                'name' => ucwords(Position::ADMIN),
                'role_id' => Role::model()->getRoleIdBySlug(Role::ADMIN),
                'description' => '',
            ),
            array(
                'slug' => Role::EXPERT . '-' . Position::OWNER,
                'name' => ucwords(Position::OWNER),
                'description' => '',
                'role_id' => Role::model()->getRoleIdBySlug(Role::EXPERT),
            ),
            array(
                'slug' => Role::EXPERT . '-' . Position::EMPLOYEE,
                'name' => ucwords(Position::EMPLOYEE),
                'description' => '',
                'role_id' => Role::model()->getRoleIdBySlug(Role::EXPERT),
            ),
            array(
                'slug' => Role::COMPANY . '-' . Position::OWNER,
                'name' => ucwords(Position::OWNER),
                'description' => '',
                'role_id' => Role::model()->getRoleIdBySlug(Role::COMPANY),
            ),
            array(
                'slug' => Role::COMPANY . '-' . Position::EMPLOYEE,
                'name' => ucwords(Position::EMPLOYEE),
                'description' => '',
                'role_id' => Role::model()->getRoleIdBySlug(Role::COMPANY),
            ),
            array(
                'slug' => Role::MEMBER . '-' . Position::MEMBER,
                'name' => ucwords(Position::MEMBER),
                'description' => '',
                'role_id' => Role::model()->getRoleIdBySlug(Role::MEMBER),
            ),
        );
        foreach ($row as $column) {
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['created_by'] = $user->id;
            $this->insert('positions', $column);
        }
    }

    public function down() {
        $this->truncateTable('positions');
    }

}
