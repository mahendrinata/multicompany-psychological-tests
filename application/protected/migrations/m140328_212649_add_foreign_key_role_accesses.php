<?php

class m140328_212649_add_foreign_key_role_accesses extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_access_id_role_accesses', 'role_accesses', 'access_id', 'accesses', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_role_id_role_accesses', 'role_accesses', 'role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_role_accesses', 'role_accesses', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_role_accesses', 'role_accesses', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_role_accesses', 'role_accesses', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_access_id_role_accesses', 'access_accesses');
        $this->dropForeignKey('fk_role_id_role_accesses', 'role_accesses');
        $this->dropForeignKey('fk_created_by_role_accesses', 'role_accesses');
        $this->dropForeignKey('fk_updated_by_role_accesses', 'role_accesses');
        $this->dropForeignKey('fk_status_id_role_accesses', 'role_accesses');
    }

}
