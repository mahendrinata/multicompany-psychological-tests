<?php

class m140319_170357_create_tests_table extends CDbMigration
{

    public function up()
    {
        $this->createTable('tests', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'duration' => 'integer NOT NULL',
            'start_date' => 'date',
            'end_date' => 'date',
            'is_public' => 'boolean',
            'status' => 'string NOT NULL',
            'user_profile_id' => 'integer NOT NULL',
            'type_id' => 'integer NOT NULL',
            'parent_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_tests_unique', 'tests', 'slug', true);
        $this->createIndex('status_tests_index', 'tests', 'status');
        $this->createIndex('user_profile_id_tests_index', 'tests', 'user_profile_id');
        $this->createIndex('type_id_tests_index', 'tests', 'type_id');
        $this->createIndex('parent_id_tests_index', 'tests', 'parent_id');
    }

    public function down()
    {
        $this->dropTable('tests');
    }

}
