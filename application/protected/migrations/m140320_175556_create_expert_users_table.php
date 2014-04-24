<?php

class m140320_175556_create_expert_users_table extends CDbMigration {

     public function up() {
        $this->createTable('expert_users', array(
            'id' => 'pk',
            'expert_id' => 'integer NOT NULL',
            'user_id' => 'integer NOT NULL',
            'position_id' => 'integer NOT NULL',
            'status_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('expert_id_expert_users_index', 'expert_users', 'expert_id');
        $this->createIndex('user_id_expert_users_index', 'expert_users', 'user_id');
        $this->createIndex('status_id_expert_users_index', 'expert_users', 'status_id');
        $this->createIndex('created_by_expert_users_index', 'expert_users', 'created_by');
        $this->createIndex('updated_by_expert_users_index', 'expert_users', 'updated_by');
    }

    public function down() {
        $this->dropTable('expert_users');
    }

}
