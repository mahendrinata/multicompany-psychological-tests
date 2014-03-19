<?php

class m140319_170240_create_user_roles_table extends CDbMigration {

  public function up() {
    $this->createTable('user_roles', array(
        'id' => 'pk',
        'user_id' => 'integer NOT NULL',
        'role_id' => 'integer NOT NULL',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ));
  }

  public function down() {
    $this->dropTable('user_roles');
  }

}
