<?php

class m140319_170754_create_variables_table extends CDbMigration {

    public function up() {
        $this->createTable('variables', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status_id' => 'integer NOT NULL',
            'type_id' => 'integer NOT NULL',
            'expert_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_variables_unique', 'variables', 'slug', true);
        $this->createIndex('status_id_variables_index', 'variables', 'status_id');
        $this->createIndex('type_id_variables_index', 'variables', 'type_id');
        $this->createIndex('expert_id_variables_index', 'variables', 'expert_id');
        $this->createIndex('created_by_variables_index', 'variables', 'created_by');
        $this->createIndex('updated_by_variables_index', 'variables', 'updated_by');
    }

    public function down() {
        $this->dropTable('variables');
    }

}
