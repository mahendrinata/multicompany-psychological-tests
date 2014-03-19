<?php

class m140319_170325_create_tags_table extends CDbMigration {

  public function up() {
    $this->createTable('tags', array(
        'id' => 'pk',
        'slug' => 'string NOT NULL',
        'name' => 'string NOT NULL',
        'status' => 'string NOT NULL',
        'parent_id' => 'integer',
        'user_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('tags');
  }

}
