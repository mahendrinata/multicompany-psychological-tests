<?php

class m140319_170325_create_tags_table extends CDbMigration {

    public function up() {
        $this->createTable('tags', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'status' => 'string',
            'parent_id' => 'integer',
            'user_profile_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_tags_unique', 'tags', 'slug', true);
        $this->createIndex('status_tags_index', 'tags', 'status');
        $this->createIndex('parent_id_tags_index', 'tags', 'parent_id');
        $this->createIndex('user_profile_id_tags_index', 'tags', 'user_profile_id');
    }

    public function down() {
        $this->dropTable('tags');
    }

}
