<?php

class m140328_212708_add_foreign_key_questions extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_test_id_questions', 'questions', 'test_id', 'tests', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_created_by_questions', 'questions', 'created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_updated_by_questions', 'questions', 'updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_status_id_questions', 'questions', 'status_id', 'statuses', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_test_id_questions', 'questions');
        $this->dropForeignKey('fk_created_by_questions', 'questions');
        $this->dropForeignKey('fk_updated_by_questions', 'questions');
        $this->dropForeignKey('fk_status_id_questions', 'questions');
    }

}
