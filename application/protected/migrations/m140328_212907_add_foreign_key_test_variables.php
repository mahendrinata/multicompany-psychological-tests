<?php

class m140328_212907_add_foreign_key_test_variables extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_test_id_test_variables', 'test_variables', 'user_test_id', 'user_tests', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_id_test_variables', 'test_variables', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_test_id_test_variables', 'test_variables');
        $this->dropForeignKey('fk_variable_id_test_variables', 'test_variables');
    }

}
