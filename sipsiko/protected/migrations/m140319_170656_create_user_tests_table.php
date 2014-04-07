<?php

class m140319_170656_create_user_tests_table extends CDbMigration {

    public function up() {
        $this->createTable('user_tests', array(
            'id' => 'pk',
            'spent_time' => 'string NOT NULL',
            'note' => 'text',
            'variable_detail_slug' => 'string NOT NULL',
            'status' => 'string',
            'user_profile_id' => 'integer',
            'test_id' => 'integer',
            'company_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('variable_detail_slug_user_tests_index', 'user_tests', 'variable_detail_slug');
        $this->createIndex('status_user_tests_index', 'user_tests', 'status');
        $this->createIndex('variable_detail_slug_user_tests_index', 'user_tests', 'variable_detail_slug');
        $this->createIndex('user_profile_id_user_tests_index', 'user_tests', 'user_profile_id');
        $this->createIndex('test_id_user_tests_index', 'user_tests', 'test_id');
        $this->createIndex('company_id_user_tests_index', 'user_tests', 'company_id');
    }

    public function down() {
        $this->dropTable('user_tests');
    }

}
