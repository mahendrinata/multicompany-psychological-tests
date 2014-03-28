<?php

class m140328_214408_insert_dummy_data_users extends CDbMigration {

    public function up() {
        $this->truncateTable('users');
        $row = array(
            array(
                'username' => 'admin',
                'email' => 'admin@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => 'mahendri',
                'email' => 'mahendri@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => 'expert',
                'email' => 'expert@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => 'company',
                'email' => 'company@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => 'member',
                'email' => 'member@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
        );
        foreach ($row as $column) {
            $this->insert('users', $column);
        }
    }

    public function down() {
        $this->truncateTable('users');
    }

}
