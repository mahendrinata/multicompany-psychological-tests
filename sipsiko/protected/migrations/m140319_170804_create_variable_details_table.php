<?php

class m140319_170804_create_variable_details_table extends CDbMigration
{

    public function up()
    {
        $this->createTable('variable_details', array(
            'id' => 'pk',
            'description' => 'text',
            'status' => 'string NOT NULL',
            'user_profile_id' => 'integer NOT NULL',
            'variable_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_variable_details_index', 'variable_details', 'status');
        $this->createIndex('user_profile_id_variable_details_index', 'variable_details', 'user_profile_id');
        $this->createIndex('variable_id_variable_details_index', 'variable_details', 'variable_id');
    }

    public function down()
    {
        $this->dropTable('variable_details');
    }

}
