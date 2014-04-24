<?php

class m140320_175551_create_results_table extends CDbMigration {

    public function up() {
        $this->createTable('results', array(
            'id' => 'pk',
            'conclusion_detail_id' => 'integer NOT NULL',
            'description' => 'text NOT NULL',
            'user_test_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('conclusion_detail_id_results_index', 'results', 'conclusion_detail_id');
        $this->createIndex('user_test_id_results_index', 'results', 'user_test_id');
    }

    public function down() {
        $this->dropTable('results');
    }

}
