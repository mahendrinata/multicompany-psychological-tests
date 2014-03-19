<?php

class m140319_170357_create_tests_table extends CDbMigration {

  public function up() {
    $this->createTable('tests', array(
        'id' => 'pk',
        'slug' => 'string NOT NULL',
        'name' => 'string NOT NULL',
        'description' => 'text',
        'duration' => 'interger NOT NULL',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_public' => 'boolean',
        'status' => 'string NOT NULL',
        'user_id' => 'integer NOT NULL',
        'type_id' => 'integer NOT NULL',
        'parent_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('tests');
  }

}
