<?php

class m140328_212923_add_foreign_key_variable_details extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_profile_id_variable_details', 'variable_details', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_profile_id_variable_details', 'variable_details');
    }

}
