<?php

class m140319_170405_create_types_table extends CDbMigration
{
	public function up() {
    $this->createTable('types', array(
        'id' => 'pk',
        'slug' => 'string NOT NULL',
        'name' => 'string NOT NULL',
        'description' => 'text',
        'status' => 'string NOT NULL',
        'user_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('types');
  }
}