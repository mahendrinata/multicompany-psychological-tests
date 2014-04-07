<?php

class m140328_212743_add_foreign_key_types extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_profile_id_types', 'types', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_profile_id_types', 'types');
    }

}