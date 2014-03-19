<?php

class m140319_170637_create_type_variables_table extends CDbMigration {

  public function up() {
    $this->createTable('type_variables', array(
        'id' => 'pk',
        'type_id' => 'integer NOT NULL',
        'variable_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('type_variables');
  }

}
