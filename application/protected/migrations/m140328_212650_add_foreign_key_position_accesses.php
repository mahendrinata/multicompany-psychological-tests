<?php

class m140328_212650_add_foreign_key_position_accesses extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_access_id_position_accesses', 'position_accesses', 'access_id', 'accesses', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_position_id_position_accesses', 'position_accesses', 'position_id', 'positions', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_position_accesses', 'position_accesses', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_position_accesses', 'position_accesses', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_access_id_position_accesses', 'access_accesses');
        $this->dropForeignKey('fk_role_id_position_accesses', 'position_accesses');
        $this->dropForeignKey('fk_created_by_position_accesses', 'position_accesses');
        $this->dropForeignKey('fk_updated_by_position_accesses', 'position_accesses');
    }

}
