<?php

class m140319_170311_create_questions_table extends CDbMigration {

    public function up() {
        $this->createTable('questions', array(
            'id' => 'pk',
            'description' => 'text NOT NULL',
            'status_id' => 'integer NOT NULL',
            'test_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_questions_index', 'questions', 'status_id');
        $this->createIndex('test_id_questions_index', 'questions', 'test_id');
        $this->createIndex('created_by_questions_index', 'questions', 'created_by');
        $this->createIndex('updated_by_questions_index', 'questions', 'updated_by');
    }

    public function down() {
        $this->dropTable('users');
    }

}
