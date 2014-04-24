<?php

class m140319_170804_create_variable_details_table extends CDbMigration {

    public function up() {
        $this->createTable('variable_details', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'shortness' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text NOT NULL',
            'status_id' => 'integer NOT NULL',
            'expert_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_variable_details_index', 'variable_details', 'slug');
        $this->createIndex('status_id_variable_details_index', 'variable_details', 'status_id');
        $this->createIndex('expert_id_variable_details_index', 'variable_details', 'expert_id');
        $this->createIndex('created_by_variable_details_index', 'variable_details', 'created_by');
        $this->createIndex('updated_by_variable_details_index', 'variable_details', 'updated_by');
    }

    public function down() {
        $this->dropTable('variable_details');
    }

}
