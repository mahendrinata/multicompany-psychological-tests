<?php

class m140328_212939_add_foreign_key_expert_users extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_expert_id_expert_users', 'expert_users', 'expert_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_id_expert_users', 'expert_users', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_position_id_expert_users', 'expert_users', 'position_id', 'positions', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_expert_users', 'expert_users', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_expert_users', 'expert_users', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_expert_id_expert_users', 'expert_users');
        $this->dropForeignKey('fk_user_id_expert_users', 'expert_users');
        $this->dropForeignKey('fk_position_id_expert_users', 'expert_users');
        $this->dropForeignKey('fk_created_by_expert_users', 'expert_users');
        $this->dropForeignKey('fk_updated_by_expert_users', 'expert_users');
    }

}
