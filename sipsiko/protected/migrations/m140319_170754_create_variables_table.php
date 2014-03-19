<?php

class m140319_170754_create_variables_table extends CDbMigration {

  public function up() {
    $this->createTable('variables', array(
        'id' => 'pk',
        'name' => 'string NOT NULL',
        'description' => 'text',
        'status' => 'string NOT NULL',
        'user_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('variables');
  }

}
