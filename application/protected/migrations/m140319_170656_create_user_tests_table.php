<?php

class m140319_170656_create_user_tests_table extends CDbMigration {

    public function up() {
        $this->createTable('user_tests', array(
            'id' => 'pk',
            'spent_time' => 'integer',
            'note' => 'text',
            'show_result' => 'boolean NOT NULL',
            'time_used' => 'integer NOT NULL',
            'start_date' => 'date',
            'end_date' => 'date',
            'status_id' => 'integer NOT NULL',
            'token' => 'string',
            'test_id' => 'integer',
            'member_id' => 'integer',
            'expert_id' => 'integer',
            'company_id' => 'integer',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_user_tests_index', 'user_tests', 'status_id');
        $this->createIndex('member_id_user_tests_index', 'user_tests', 'member_id');
        $this->createIndex('test_id_user_tests_index', 'user_tests', 'test_id');
        $this->createIndex('expert_id_user_tests_index', 'user_tests', 'expert_id');
        $this->createIndex('company_id_user_tests_index', 'user_tests', 'company_id');
        $this->createIndex('created_by_user_tests_index', 'user_tests', 'created_by');
        $this->createIndex('updated_by_user_tests_index', 'user_tests', 'updated_by');
    }

    public function down() {
        $this->dropTable('user_tests');
    }

}
