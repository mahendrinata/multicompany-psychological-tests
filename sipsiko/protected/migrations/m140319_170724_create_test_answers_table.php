<?php

class m140319_170724_create_test_answers_table extends CDbMigration
{

    public function up()
    {
        $this->createTable('test_answers', array(
            'id' => 'pk',
            'user_test_id' => 'integer NOT NULL',
            'answer_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('user_test_id_test_answers_index', 'test_answers', 'user_test_id');
        $this->createIndex('answer_id_test_answers_index', 'test_answers', 'answer_id');
    }

    public function down()
    {
        $this->dropTable('test_answers');
    }

}
