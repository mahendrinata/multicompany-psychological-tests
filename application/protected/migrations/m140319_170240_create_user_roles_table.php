<?php

class m140319_170240_create_user_roles_table extends CDbMigration {

    public function up() {
        $this->createTable('user_roles', array(
            'id' => 'pk',
            'status_id' => 'integer NOT NULL',
            'user_id' => 'integer NOT NULL',
            'role_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_user_roles_index', 'user_roles', 'status_id');
        $this->createIndex('user_id_user_roles_index', 'user_roles', 'user_id');
        $this->createIndex('role_id_user_roles_index', 'user_roles', 'role_id');
    }

    public function down() {
        $this->dropTable('user_roles');
    }

}
