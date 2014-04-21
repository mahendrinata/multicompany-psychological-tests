<?php

class m140319_170754_create_variables_table extends CDbMigration {

    public function up() {
        $this->createTable('variables', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status' => 'string',
            'type_id' => 'integer',
            'user_profile_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_variables_unique', 'variables', 'slug');
        $this->createIndex('status_variables_index', 'variables', 'status');
        $this->createIndex('type_id_variables_index', 'variables', 'type_id');
        $this->createIndex('user_profiles_id_variables_index', 'variables', 'user_profile_id');
    }

    public function down() {
        $this->dropTable('variables');
    }

}
