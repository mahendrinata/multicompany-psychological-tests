<?php

class m140328_212648_add_foreign_key_accesses extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_created_by_accesses', 'accesses', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_accesses', 'accesses', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_accesses', 'accesses', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_created_by_accesses', 'accesses');
        $this->dropForeignKey('fk_updated_by_accesses', 'accesses');
        $this->dropForeignKey('fk_status_id_accesses', 'accesses');
    }

}
