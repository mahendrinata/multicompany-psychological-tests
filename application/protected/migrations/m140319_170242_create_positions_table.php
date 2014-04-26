<?php

class m140319_170242_create_positions_table extends CDbMigration {

    public function up() {
        $this->createTable('positions', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status_id' => 'integer NOT NULL',
            'role_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_positions_unique', 'positions', 'slug', true);
        $this->createIndex('status_id_positions_index', 'positions', 'status_id');
        $this->createIndex('role_id_positions_index', 'positions', 'role_id');
        $this->createIndex('created_by_positions_index', 'positions', 'created_by');
        $this->createIndex('updated_by_positions_index', 'positions', 'updated_by');
    }

    public function down() {
        $this->dropTable('positions');
    }

}
