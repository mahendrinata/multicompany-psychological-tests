<?php

class m140319_170742_create_test_variables_table extends CDbMigration {

    public function up() {
        $this->createTable('test_variables', array(
            'id' => 'pk',
            'value' => 'integer NOT NULL',
            'user_test_id' => 'integer NOT NULL',
            'variable_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('user_test_id_test_variables_index', 'test_variables', 'user_test_id');
        $this->createIndex('variable_id_test_variables_index', 'test_variables', 'variable_id');
    }

    public function down() {
        $this->dropTable('test_variables');
    }

}
