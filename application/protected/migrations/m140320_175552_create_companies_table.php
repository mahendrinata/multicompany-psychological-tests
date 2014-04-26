<?php

class m140320_175552_create_companies_table extends CDbMigration {

    public function up() {
        $this->createTable('companies', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'address' => 'text NOT NULL',
            'phone' => 'string NOT NULL',
            'photo' => 'string',
            'status_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_companies_unique', 'companies', 'slug');
        $this->createIndex('status_id_companies_index', 'companies', 'status_id');
        $this->createIndex('created_by_companies_index', 'companies', 'created_by');
        $this->createIndex('updated_by_companies_index', 'companies', 'updated_by');
    }

    public function down() {
        $this->dropTable('companies');
    }

}
