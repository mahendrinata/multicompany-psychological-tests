<?php

class m140328_212916_add_foreign_key_variables extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_type_id_variables', 'variables', 'type_id', 'types', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_expert_id_variables', 'variables', 'expert_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_variables', 'variables', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_variables', 'variables', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_variables', 'variables', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_type_id_variables', 'variables');
        $this->dropForeignKey('fk_expert_id_variables', 'variables');
        $this->dropForeignKey('fk_created_by_variables', 'variables');
        $this->dropForeignKey('fk_updated_by_variables', 'variables');
        $this->dropForeignKey('fk_status_id_variables', 'variables');
    }

}
