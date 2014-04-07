<?php

class m140319_170357_create_tests_table extends CDbMigration {

    public function up() {
        $this->createTable('tests', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'duration' => 'integer NOT NULL',
            'start_date' => 'date',
            'end_date' => 'date',
            'is_public' => 'boolean NOT NULL',
            'is_expert' => 'boolean NOT NULL',
            'combination_variable' => 'integer NOT NULL',
            'status' => 'string',
            'user_profile_id' => 'integer',
            'type_id' => 'integer',
            'parent_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_tests_unique', 'tests', 'slug', true);
        $this->createIndex('status_tests_index', 'tests', 'status');
        $this->createIndex('user_profile_id_tests_index', 'tests', 'user_profile_id');
        $this->createIndex('type_id_tests_index', 'tests', 'type_id');
        $this->createIndex('parent_id_tests_index', 'tests', 'parent_id');
    }

    public function down() {
        $this->dropTable('tests');
    }

}
