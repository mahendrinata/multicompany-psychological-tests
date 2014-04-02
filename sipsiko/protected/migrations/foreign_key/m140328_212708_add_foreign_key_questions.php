<?php

class m140328_212708_add_foreign_key_questions extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_test_id_questions', 'questions', 'test_id', 'tests', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_test_id_questions', 'questions');
    }

}
