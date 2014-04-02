<?php

class m140328_212647_add_foreign_key_user_profiles extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_id_user_profiles', 'user_profiles', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_role_id_user_profiles', 'user_profiles', 'role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_id_user_profiles', 'user_profiles');
        $this->dropForeignKey('fk_role_id_user_profiles', 'user_profiles');
    }

}
