<?php

class m140319_170656_create_user_tests_table extends CDbMigration {

  public function up() {
    $this->createTable('user_tests', array(
        'id' => 'pk',
        'spent_time' => 'string NOT NULL',
        'note' => 'text',
        'status' => 'string NOT NULL',
        'user_id' => 'integer NOT NULL',
        'test_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('user_tests');
  }

}
