<?php

class m140328_212716_add_foreign_key_tags extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_parent_id_tags', 'tags', 'parent_id', 'tags', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_profile_id_tags', 'tags', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_parent_id_tags', 'tags');
        $this->dropForeignKey('fk_user_profile_id_tags', 'tags');
    }

}
