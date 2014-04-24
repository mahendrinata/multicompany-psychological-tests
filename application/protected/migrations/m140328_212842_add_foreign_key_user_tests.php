<?php

class m140328_212842_add_foreign_key_user_tests extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_member_id_user_tests', 'user_tests', 'member_id', 'members', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_expert_id_user_tests', 'user_tests', 'expert_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_company_id_user_tests', 'user_tests', 'company_id', 'companies', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_test_id_user_tests', 'user_tests', 'test_id', 'tests', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_user_tests', 'user_tests', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_user_tests', 'user_tests', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_member_id_user_tests', 'user_tests');
        $this->dropForeignKey('fk_expert_id_user_tests', 'user_tests');
        $this->dropForeignKey('fk_companies_id_user_tests', 'user_tests');
        $this->dropForeignKey('fk_test_id_user_user_tests', 'user_test');
        $this->dropForeignKey('fk_created_by_user_tests', 'user_tests');
        $this->dropForeignKey('fk_updated_by_user_tests', 'user_tests');
    }

}
