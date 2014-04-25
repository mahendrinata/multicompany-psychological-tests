<?php

class m140328_212647_add_foreign_key_positions extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_role_id_positions', 'positions', 'role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_positions', 'positions', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_positions', 'positions', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_positions', 'positions', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_role_id_positions', 'positions');
        $this->dropForeignKey('fk_created_by_positions', 'positions');
        $this->dropForeignKey('fk_updated_by_positions', 'positions');
        $this->dropForeignKey('fk_status_id_position', 'position');
    }

}
