<?php

class m140319_170311_create_questions_table extends CDbMigration {

    public function up() {
        $this->createTable('questions', array(
            'id' => 'pk',
            'description' => 'text NOT NULL',
            'status' => 'string',
            'test_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_questions_index', 'questions', 'status');
        $this->createIndex('test_id_questions_index', 'questions', 'test_id');
    }

    public function down() {
        $this->dropTable('users');
    }

}
