<?php

class m140328_212937_add_foreign_key_members extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_id_member', 'members', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_id_member', 'members');
    }

}
