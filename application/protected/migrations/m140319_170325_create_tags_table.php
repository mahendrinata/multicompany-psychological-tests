<?php

class m140319_170325_create_tags_table extends CDbMigration {

    public function up() {
        $this->createTable('tags', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'status_id' => 'integer NOT NULL',
            'parent_id' => 'integer',
            'expert_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_tags_unique', 'tags', 'slug', true);
        $this->createIndex('status_id_tags_index', 'tags', 'status_id');
        $this->createIndex('parent_id_tags_index', 'tags', 'parent_id');
        $this->createIndex('expert_id_tags_index', 'tags', 'expert_id');
        $this->createIndex('created_by_tags_index', 'tags', 'created_by');
        $this->createIndex('updated_by_tags_index', 'tags', 'updated_by');
    }

    public function down() {
        $this->dropTable('tags');
    }

}
