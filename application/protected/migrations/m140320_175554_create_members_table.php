<?php

class m140320_175554_create_members_table extends CDbMigration {

    public function up() {
        $this->createTable('members', array(
            'id' => 'pk',
            'first_name' => 'string NOT NULL',
            'last_name' => 'string',
            'gender' => 'boolean NOT NULL',
            'birth_place' => 'string',
            'birth_date' => 'string',
            'address' => 'text',
            'phone' => 'string',
            'photo' => 'string',
            'status_id' => 'integer NOT NULL',
            'user_id' => 'integer',
            'position_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_id_members_index', 'members', 'status_id');
        $this->createIndex('user_id_members_index', 'members', 'user_id');
        $this->createIndex('position_id_members_index', 'members', 'position_id');
    }

    public function down() {
        $this->dropTable('members');
    }

}
