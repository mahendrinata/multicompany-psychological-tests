<?php

class m140320_175551_create_results_table extends CDbMigration {

    public function up() {
        $this->createTable('results', array(
            'id' => 'pk',
            'slug' => 'string',
            'description' => 'text',
            'user_test_id' => 'integer NOT NULL',
            'variable_detail_slug' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('user_test_id_results_index', 'results', 'user_test_id');
        $this->createIndex('variable_detail_slug_results_index', 'results', 'variable_detail_slug');
    }

    public function down() {
        $this->dropTable('results');
    }

}
