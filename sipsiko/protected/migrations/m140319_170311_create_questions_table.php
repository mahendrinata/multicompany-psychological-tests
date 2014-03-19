<?php

class m140319_170311_create_questions_table extends CDbMigration {

  public function up() {
    $this->createTable('questions', array(
        'id' => 'pk',
        'description' => 'text NOT NULL',
        'status' => 'string NOT NULL',
        'test_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('users');
  }

}
