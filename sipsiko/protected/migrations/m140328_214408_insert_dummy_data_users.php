<?php

class m140328_214408_insert_dummy_data_users extends CDbMigration {

    public function up() {
        $row = array(
            array(
                'username' => Role::model()->slugify('admin'),
                'email' => 'admin@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => Role::model()->slugify('mahendri'),
                'email' => 'mahendri@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => Role::model()->slugify('expert'),
                'email' => 'expert@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => Role::model()->slugify('company'),
                'email' => 'company@sipsiko.com',
                'password' => User::model()->hashPassword('12345'),
                'status' => Status::ACTIVE,
            ),
            array(
                'username' => Role::model()->slugify('member'),
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
    }

}
