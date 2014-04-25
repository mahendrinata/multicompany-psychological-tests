<?php

class m140319_170243_create_role_accesses_table extends CDbMigration {

    public function up() {
        $this->createTable('role_accesses', array(
            'id' => 'pk',
            'status_id' => 'integer NOT NULL',
            'access_id' => 'integer NOT NULL',
            'role_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_role_accesses_index', 'role_accesses', 'status_id');
        $this->createIndex('access_id_role_accesses_index', 'role_accesses', 'access_id');
        $this->createIndex('role_id_role_accesses_index', 'role_accesses', 'role_id');
        $this->createIndex('created_by_role_accesses_index', 'role_accesses', 'created_by');
        $this->createIndex('updated_by_role_accesses_index', 'role_accesses', 'updated_by');
    }

    public function down() {
        $this->dropTable('role_accesses');
    }

}
