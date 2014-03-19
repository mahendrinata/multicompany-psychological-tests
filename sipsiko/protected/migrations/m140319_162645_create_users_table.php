<?php

class m140319_162645_create_users_table extends CDbMigration {

  public function up() {
    $this->createTable('users', array(
        'id' => 'pk',
        'username' => 'string NOT NULL',
        'first_name' => 'string NOT NULL',
        'last_name' => 'string',
        'email' => 'string NOT NULL',
        'address' => 'text',
        'phone' => 'string',
        'photo' => 'text',
        'password' => 'string',
        'status' => 'string NOT NULL',
        'parent_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
     $this->dropTable('users');
  }

}
