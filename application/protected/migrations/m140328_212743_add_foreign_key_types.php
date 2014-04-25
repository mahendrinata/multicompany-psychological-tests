<?php

class m140328_212743_add_foreign_key_types extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_expert_id_types', 'types', 'expert_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_types', 'types', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_types', 'types', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_types', 'types', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_profile_id_types', 'types');
        $this->dropForeignKey('fk_created_by_types', 'types');
        $this->dropForeignKey('fk_updated_by_types', 'types');
        $this->dropForeignKey('fk_status_id_types', 'types');
    }

}
