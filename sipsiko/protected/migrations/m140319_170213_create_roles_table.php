<?php

class m140319_170213_create_roles_table extends CDbMigration
{

    public function up()
    {
        $this->createTable('roles', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status' => 'string NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_roles_unique', 'roles', 'slug');
        $this->createIndex('status_roles_index', 'roles', 'status');
    }

    public function down()
    {
        $this->dropTable('roles');
    }

}
