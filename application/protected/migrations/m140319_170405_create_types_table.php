<?php

class m140319_170405_create_types_table extends CDbMigration {

    public function up() {
        $this->createTable('types', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status_id' => 'integer NOT NULL',
            'conclusion_id' => 'integer NOT NULL',
            'template_test_id' => 'integer NOT NULL',
            'expert_id' => 'integer NOT NULL',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_types_unique', 'types', 'slug', true);
        $this->createIndex('status_id_types_index', 'types', 'status_id');
        $this->createIndex('conclusion_id_types_index', 'types', 'conclusion_id');
        $this->createIndex('template_test_id_types_index', 'types', 'template_test_id');
        $this->createIndex('expert_id_types_index', 'types', 'expert_id');
        $this->createIndex('created_by_types_index', 'types', 'created_by');
        $this->createIndex('updated_by_types_index', 'types', 'updated_by');
    }

    public function down() {
        $this->dropTable('types');
    }

}
