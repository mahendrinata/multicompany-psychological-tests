<?php

class m140328_212923_add_foreign_key_variable_details extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_expert_id_variable_details', 'variable_details', 'expert_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_variable_details', 'variable_details', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_variable_details', 'variable_details', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_variable_details', 'variable_details', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_expert_id_variable_details', 'variable_details');
        $this->dropForeignKey('fk_created_by_variable_details', 'variable_details');
        $this->dropForeignKey('fk_updated_by_variable_details', 'variable_details');
        $this->dropForeignKey('fk_status_id_variable_details', 'variable_details');
    }

}
