<?php

class m140328_212938_add_foreign_key_company_users extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_company_id_company_users', 'company_users', 'company_id', 'companies', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_id_company_users', 'company_users', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_position_id_company_users', 'company_users', 'position_id', 'positions', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_company_users', 'company_users', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_company_users', 'company_users', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_company_id_company_users', 'company_users');
        $this->dropForeignKey('fk_user_id_company_users', 'company_users');
        $this->dropForeignKey('fk_position_id_company_users', 'company_users');
        $this->dropForeignKey('fk_created_by_company_users', 'company_users');
        $this->dropForeignKey('fk_updated_by_company_users', 'company_users');
    }

}
