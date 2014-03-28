<?php

class m140328_212855_add_foreign_key_test_answers extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_user_test_id_test_answers', 'test_answers', 'user_test_id', 'user_tests', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_answer_id_test_answers', 'test_answers', 'answer_id', 'answers', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_user_test_id_test_answers', 'test_answers');
        $this->dropForeignKey('fk_answer_id_test_answers', 'test_answers');
    }

}
