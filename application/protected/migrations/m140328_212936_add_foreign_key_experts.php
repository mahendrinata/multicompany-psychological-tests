<?php

class m140328_212936_add_foreign_key_experts extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_created_by_experts', 'experts', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_experts', 'experts', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_created_by_experts', 'experts');
        $this->dropForeignKey('fk_updated_by_experts', 'experts');
    }

}
