<?php

class m140319_170804_create_variable_details_table extends CDbMigration {

  public function up() {
    $this->createTable('variable_details', array(
        'id' => 'pk',
        'description' => 'text',
        'status' => 'string NOT NULL',
        'user_id' => 'integer NOT NULL',
        'variable_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('variable_details');
  }

}
