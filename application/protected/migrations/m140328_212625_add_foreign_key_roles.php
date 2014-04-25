<?php

class m140328_212625_add_foreign_key_roles extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_created_by_roles', 'roles', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_roles', 'roles', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_roles', 'roles', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_created_by_roles', 'roles');
        $this->dropForeignKey('fk_updated_by_roles', 'roles');
        $this->dropForeignKey('fk_status_id_roles', 'roles');
    }

}
