<?php

class m140320_175555_create_company_users_table extends CDbMigration {

    public function up() {
        $this->createTable('company_users', array(
            'id' => 'pk',
            'company_id' => 'integer NOT NULL',
            'user_id' => 'integer NOT NULL',
            'position_id' => 'integer NOT NULL',
            'status_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('company_id_company_users_index', 'company_users', 'company_id');
        $this->createIndex('user_id_company_users_index', 'company_users', 'user_id');
        $this->createIndex('status_id_company_users_index', 'company_users', 'status_id');
        $this->createIndex('created_by_company_users_index', 'company_users', 'created_by');
        $this->createIndex('updated_by_company_users_index', 'company_users', 'updated_by');
    }

    public function down() {
        $this->dropTable('company_users');
    }

}
