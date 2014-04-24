<?php

class m140319_170259_create_answers_table extends CDbMigration {

    public function up() {
        $this->createTable('answers', array(
            'id' => 'pk',
            'description' => 'text NOT NULL',
            'value' => 'integer NOT NULL',
            'status_id' => 'integer NOT NULL',
            'question_id' => 'integer NOT NULL',
            'variable_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_answers_index', 'answers', 'status_id');
        $this->createIndex('question_id_answers_index', 'answers', 'question_id');
        $this->createIndex('variable_id_answers_index', 'answers', 'variable_id');
        $this->createIndex('created_by_answers_index', 'answers', 'created_by');
        $this->createIndex('updated_by_answers_index', 'answers', 'updated_by');
    }

    public function down() {
        $this->dropTable('answers');
    }

}
