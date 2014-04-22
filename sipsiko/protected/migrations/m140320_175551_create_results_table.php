<?php

class m140320_175551_create_results_table extends CDbMigration {

    public function up() {
        $this->createTable('results', array(
            'id' => 'pk',
            'slug' => 'string',
            'description' => 'text',
            'user_test_id' => 'integer NOT NULL',
            'variable_detail_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('user_test_id_results_index', 'results', 'user_test_id');
        $this->createIndex('variable_detail_id_results_index', 'results', 'variable_detail_id');
    }

    public function down() {
        $this->dropTable('results');
    }

}
