<?php

class m140319_170637_create_type_variables_table extends CDbMigration
{

    public function up()
    {
        $this->createTable('type_variables', array(
            'id' => 'pk',
            'type_id' => 'integer NOT NULL',
            'variable_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('type_id_type_variables_index', 'type_variables', 'type_id');
        $this->createIndex('variable_id_index', 'type_variables', 'variable_id');
    }

    public function down()
    {
        $this->dropTable('type_variables');
    }

}
