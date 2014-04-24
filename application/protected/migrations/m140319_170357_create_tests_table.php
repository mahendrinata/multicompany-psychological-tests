<?php

class m140319_170357_create_tests_table extends CDbMigration {

    public function up() {
        $this->createTable('tests', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text NOT NULL',
            'duration' => 'integer',
            'start_date' => 'date',
            'end_date' => 'date',
            'publication_id' => 'integer NOT NULL',
            'show_result' => 'boolean NOT NULL',
            'combination_variable' => 'integer NOT NULL',
            'status_id' => 'integer NOT NULL',
            'company_id' => 'integer',
            'expert_id' => 'integer',
            'type_id' => 'integer NOT NULL',
            'parent_id' => 'integer',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_tests_unique', 'tests', 'slug', true);
        $this->createIndex('status_id_tests_index', 'tests', 'status_id');
        $this->createIndex('expert_id_tests_index', 'tests', 'expert_id');
        $this->createIndex('company_id_tests_index', 'tests', 'company_id');
        $this->createIndex('type_id_tests_index', 'tests', 'type_id');
        $this->createIndex('parent_id_tests_index', 'tests', 'parent_id');
        $this->createIndex('created_by_tests_index', 'tests', 'created_by');
        $this->createIndex('updated_by_tests_index', 'tests', 'updated_by');
    }

    public function down() {
        $this->dropTable('tests');
    }

}
