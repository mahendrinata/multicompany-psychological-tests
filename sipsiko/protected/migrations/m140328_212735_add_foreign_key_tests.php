<?php

class m140328_212735_add_foreign_key_tests extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_profile_id_tests', 'tests', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_type_id_tests', 'tests', 'type_id', 'types', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_parent_id_tests', 'tests', 'parent_id', 'tests', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_profile_id_tests', 'tests');
        $this->dropForeignKey('fk_type_id_tests', 'tests');
        $this->dropForeignKey('fk_parent_id_tests', 'tests');
    }

}
