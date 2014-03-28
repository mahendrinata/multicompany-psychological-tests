<?php

class m140319_162645_create_users_table extends CDbMigration {

    public function up() {
        $this->createTable('users', array(
            'id' => 'pk',
            'username' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'password' => 'string NOT NULL',
            'status' => 'string NOT NULL',
            'last_login' => 'datetime',
            'last_login_ip' => 'string',
            'login_count' => 'integer NOT NULL',
            'token' => 'string',
            'parent_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('username_users_unique', 'users', 'username', true);
        $this->createIndex('email_users_unique', 'users', 'email', true);
        $this->createIndex('status_users_index', 'users', 'status');
        $this->createIndex('token_users_index', 'users', 'token');
        $this->createIndex('parent_id_users_index', 'users', 'parent_id');
    }

    public function down() {
        $this->dropTable('users');
    }

}
