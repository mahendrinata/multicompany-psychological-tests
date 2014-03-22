<?php

class m140319_170259_create_answers_table extends CDbMigration
{

    public function up()
    {
        $this->createTable('answers', array(
            'id' => 'pk',
            'description' => 'text NOT NULL',
            'value' => 'integer NOT NULL',
            'status' => 'string NOT NULL',
            'question_id' => 'integer NOT NULL',
            'variable_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_answers_index', 'answers', 'status');
        $this->createIndex('question_id_answers_index', 'answers', 'question_id');
        $this->createIndex('variable_id_answers_index', 'answers', 'variable_id');
    }

    public function down()
    {
        $this->dropTable('answers');
    }

}
