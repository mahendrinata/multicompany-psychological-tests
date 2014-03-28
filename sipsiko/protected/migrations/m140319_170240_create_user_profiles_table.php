<?php

class m140319_170240_create_user_profiles_table extends CDbMigration {

    public function up() {
        $this->createTable('user_profiles', array(
            'id' => 'pk',
            'first_name' => 'string NOT NULL',
            'last_name' => 'string',
            'address' => 'text',
            'phone' => 'string',
            'photo' => 'text',
            'status' => 'string NOT NULL',
            'user_id' => 'integer NOT NULL',
            'role_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('status_user_profiles_index', 'user_profiles', 'status');
        $this->createIndex('user_id_user_profiles_index', 'user_profiles', 'user_id');
        $this->createIndex('role_id_user_profiles_index', 'user_profiles', 'role_id');
    }

    public function down() {
        $this->dropTable('user_profiles');
    }

}
