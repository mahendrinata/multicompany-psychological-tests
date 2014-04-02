<?php

class m140328_212842_add_foreign_key_user_tests extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_profile_id_user_tests', 'user_tests', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_test_id_user_tests', 'user_tests', 'test_id', 'tests', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_profile_id_user_tests', 'user_tests');
        $this->dropForeignKey('fk_test_id_user_tests', 'user_test');
    }

}
