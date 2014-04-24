<?php

class m140320_175549_create_result_details_table extends CDbMigration {

    public function up() {
        $this->createTable('result_details', array(
            'id' => 'pk',
            'result_id' => 'integer NOT NULL',
            'variable_detail_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('result_id_result_details_index', 'result_details', 'result_id');
        $this->createIndex('variable_detail_id_result_details_index', 'result_details', 'variable_detail_id');
    }

    public function down() {
        $this->dropTable('result_details');
    }

}
