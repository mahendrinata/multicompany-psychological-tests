<?php

class m140320_175550_create_combinations_table extends CDbMigration {

    public function up() {
        $this->createTable('combinations', array(
            'id' => 'pk',
            'variable_id' => 'integer NOT NULL',
            'variable_detail_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('variable_id_combinations_index', 'combinations', 'variable_id');
        $this->createIndex('variable_detail_id_combinations_index', 'combinations', 'variable_detail_id');
    }

    public function down() {
        $this->dropTable('combinations');
    }

}
