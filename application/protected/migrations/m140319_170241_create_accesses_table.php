<?php

class m140319_170241_create_accesses_table extends CDbMigration {

    public function up() {
        $this->createTable('accesses', array(
            'id' => 'pk',
            'slug' => 'integer NOT NULL',
            'name' => 'string NOT NULL',
            'url' => 'string NOT NULL',
            'params' => 'text',
            'status_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_accesses_unique', 'accesses', 'slug');
        $this->createIndex('status_id_accesses_index', 'accesses', 'status_id');
        $this->createIndex('created_by_accesses_index', 'accesses', 'created_by');
        $this->createIndex('updated_by_accesses_index', 'accesses', 'updated_by');
    }

    public function down() {
        $this->dropTable('accesses');
    }

}
