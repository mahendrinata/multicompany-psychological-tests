<?php

class m140328_214418_insert_dummy_data_companies extends CDbMigration {

    public function up() {
        $creater = User::model()->findByAttributes(array('username' => 'admin'));
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $row = array(
            array(
                'slug' => Company::slugify('CV. Madain'),
                'name' => 'CV. Madain',
                'address' => 'Jl. Penyu No.40 Bandung',
                'phone' => '085721821555',
                'photo' => '',
            ),
        );
        foreach ($row as $column) {
            $column['created_by'] = $creater->id;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);

            $this->insert('companies', $column);

            $position = Position::model()->findBySlug(Role::COMPANY . '-' . Position::OWNER);
            $this->insert('company_users', array(
                'company_id' => 1,
                'user_id' => $user->id,
                'position_id' => $position->id,
                'status_id' => Status::model()->getStatusIdBySlug(Status::ACTIVE),
                'created_by' => $creater->id,
                'created_at' => date('Y-m-d')
            ));
        }
    }

    public function down() {
        $this->truncateTable('company_users');
        $this->truncateTable('companies');
    }

}
