<?php

class m140328_212657_add_foreign_key_answers extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_question_id_answers', 'answers', 'question_id', 'questions', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_id_answers', 'answers', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_question_id_answers', 'answers');
        $this->dropForeignKey('fk_variable_id_answers', 'answers');
    }

}
