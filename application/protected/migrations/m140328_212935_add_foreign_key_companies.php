<?php

class m140328_212935_add_foreign_key_companies extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_created_by_companies', 'companies', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_companies', 'companies', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_created_by_companies', 'companies');
        $this->dropForeignKey('fk_updated_by_companies', 'companies');
    }

}
