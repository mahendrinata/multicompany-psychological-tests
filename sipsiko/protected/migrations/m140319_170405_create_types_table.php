<?php

class m140319_170405_create_types_table extends CDbMigration {

    public function up() {
        $this->createTable('types', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status' => 'string',
            'user_profile_id' => 'integer NOT NULL',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_types_unique', 'types', 'slug');
        $this->createIndex('status_types_index', 'types', 'status');
        $this->createIndex('user_profile_id_types_index', 'types', 'user_profile_id');
    }

    public function down() {
        $this->dropTable('types');
    }

}
