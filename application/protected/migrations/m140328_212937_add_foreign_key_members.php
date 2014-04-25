<?php

class m140328_212937_add_foreign_key_members extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_id_members', 'members', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_position_id_members', 'members', 'position_id', 'positions', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_members', 'members', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_id_members', 'members');
        $this->dropForeignKey('fk_position_id_members', 'members');
        $this->dropForeignKey('fk_status_id_members', 'members');
    }

}
