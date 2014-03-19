<?php

class m140319_170344_create_tag_variables_table extends CDbMigration {

  public function up() {
    $this->createTable('tag_variables', array(
        'id' => 'pk',
        'tag_id' => 'integer NOT NULL',
        'variable_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('tag_variables');
  }

}
