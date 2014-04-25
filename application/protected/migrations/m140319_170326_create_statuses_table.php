<?php

class m140319_170326_create_statuses_table extends CDbMigration {

    public function up() {
        $this->createTable('statuses', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'descripsion' => 'text',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_statuses_unique', 'statuses', 'slug', true);
        $this->createIndex('created_by_statuses_index', 'statuses', 'created_by');
        $this->createIndex('updated_by_statuses_index', 'statuses', 'updated_by');
    }

    public function down() {
        $this->dropTable('statuses');
    }

}
