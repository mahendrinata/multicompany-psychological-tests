<?php

class m140328_212624_add_foreign_key_users extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_parent_id_users', 'users', 'parent_id', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_parent_id_users', 'users');
    }

}
