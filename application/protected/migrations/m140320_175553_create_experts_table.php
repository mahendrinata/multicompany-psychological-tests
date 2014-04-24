<?php

class m140320_175553_create_experts_table extends CDbMigration {

    public function up() {
        $this->createTable('experts', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'address' => 'text NOT NULL',
            'phone' => 'string NOT NULL',
            'photo' => 'string',
            'status_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_experts_index', 'experts', 'status_id');
        $this->createIndex('created_by_experts_index', 'experts', 'created_by');
        $this->createIndex('updated_by_experts_index', 'experts', 'updated_by');
    }

    public function down() {
        $this->dropTable('experts');
    }

}
