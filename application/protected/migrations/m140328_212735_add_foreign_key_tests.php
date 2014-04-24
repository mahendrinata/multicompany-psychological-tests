<?php

class m140328_212735_add_foreign_key_tests extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_expert_id_tests', 'tests', 'expert_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_company_id_tests', 'tests', 'company_id', 'companies', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_type_id_tests', 'tests', 'type_id', 'types', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_parent_id_tests', 'tests', 'parent_id', 'tests', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_tests', 'tests', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_tests', 'tests', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_expert_id_tests', 'tests');
        $this->dropForeignKey('fk_company_id_tests', 'tests');
        $this->dropForeignKey('fk_type_id_tests', 'tests');
        $this->dropForeignKey('fk_parent_id_tests', 'tests');
        $this->dropForeignKey('fk_created_by_tests', 'tests');
        $this->dropForeignKey('fk_updated_by_tests', 'tests');
    }

}
