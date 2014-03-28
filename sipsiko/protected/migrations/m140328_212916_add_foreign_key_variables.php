<?php

class m140328_212916_add_foreign_key_variables extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_profile_id_variables', 'variables', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_profile_id_variables', 'variables');
    }

}
