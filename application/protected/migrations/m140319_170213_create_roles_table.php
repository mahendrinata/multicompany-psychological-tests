<?php

class m140319_170213_create_roles_table extends CDbMigration {

    public function up() {
        $this->createTable('roles', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_roles_unique', 'roles', 'slug', true);
        $this->createIndex('status_id_roles_index', 'roles', 'status_id');
        $this->createIndex('created_by_roles_index', 'roles', 'created_by');
        $this->createIndex('updated_by_roles_index', 'roles', 'updated_by');
    }

    public function down() {
        $this->dropTable('roles');
    }

}
