<?php

class m140319_170244_create_position_accesses_table extends CDbMigration {

    public function up() {
        $this->createTable('position_accesses', array(
            'id' => 'pk',
            'status_id' => 'integer NOT NULL',
            'access_id' => 'integer NOT NULL',
            'position_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_position_accesses_index', 'position_accesses', 'status_id');
        $this->createIndex('access_id_position_accesses_index', 'position_accesses', 'access_id');
        $this->createIndex('position_id_position_accesses_index', 'position_accesses', 'position_id');
        $this->createIndex('created_by_position_accesses_index', 'position_accesses', 'created_by');
        $this->createIndex('updated_by_position_accesses_index', 'position_accesses', 'updated_by');
    }

    public function down() {
        $this->dropTable('position_accesses');
    }

}
