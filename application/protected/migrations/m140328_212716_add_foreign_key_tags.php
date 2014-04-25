<?php

class m140328_212716_add_foreign_key_tags extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_parent_id_tags', 'tags', 'parent_id', 'tags', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_expert_id_tags', 'tags', 'expert_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_tags', 'tags', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_tags', 'tags', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_tags', 'tags', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_parent_id_tags', 'tags');
        $this->dropForeignKey('fk_expert_id_tags', 'tags');
        $this->dropForeignKey('fk_created_by_tags', 'tags');
        $this->dropForeignKey('fk_updated_by_tags', 'tags');
        $this->dropForeignKey('fk_status_id_tags', 'tags');
    }

}
