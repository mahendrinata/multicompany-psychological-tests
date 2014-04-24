<?php

class m140328_212933_add_foreign_key_results extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_test_id_result', 'results', 'user_test_id', 'user_tests', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_test_id_results', 'results');
    }

}
