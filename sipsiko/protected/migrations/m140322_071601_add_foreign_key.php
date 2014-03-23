<?php

class m140322_071601_add_foreign_key extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_parent_id_users', 'users', 'parent_id', 'users', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_user_id_user_profiles', 'user_profiles', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_role_id_user_profiles', 'user_profiles', 'role_id', 'roles', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_question_id_answers', 'answers', 'question_id', 'questions', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_id_answers', 'answers', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_test_id_questions', 'questions', 'test_id', 'tests', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_parent_id_tags', 'tags', 'parent_id', 'tags', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_profile_id_tags', 'tags', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_tag_id_tag_variables', 'tag_variables', 'tag_id', 'tags', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_id_tag_variables', 'tag_variables', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_user_profile_id_tests', 'tests', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_type_id_tests', 'tests', 'type_id', 'types', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_parent_id_tests', 'tests', 'parent_id', 'tests', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_user_profile_id_types', 'types', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_type_id_type_variables', 'type_variables', 'type_id', 'types', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_id_type_variables', 'type_variables', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_user_profile_id_user_tests', 'user_tests', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_test_id_user_tests', 'user_tests', 'test_id', 'tests', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_user_test_id_test_answers', 'test_answers', 'user_test_id', 'user_tests', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_answer_id_test_answers', 'test_answers', 'answer_id', 'answers', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_user_test_id_test_variables', 'test_variables', 'user_test_id', 'user_tests', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_id_test_variables', 'test_variables', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_user_profile_id_variables', 'variables', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');

        $this->addForeignKey('fk_variable_id_combinations', 'combinations', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_detail_id_combinations', 'combinations', 'variable_detail_id', 'variable_details', 'id', 'CASCADE', 'CASCADE');
        
        $this->addForeignKey('fk_user_profile_id_variable_details', 'variable_details', 'user_profile_id', 'user_profiles', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_parent_id_users', 'users');

        $this->dropForeignKey('fk_user_id_user_profiles', 'user_profiles');
        $this->dropForeignKey('fk_role_id_user_profiles', 'user_profiles');

        $this->dropForeignKey('fk_question_id_answers', 'answers');
        $this->dropForeignKey('fk_variable_id_answers', 'answers');

        $this->dropForeignKey('fk_test_id_questions', 'questions');

        $this->dropForeignKey('fk_parent_id_tags', 'tags');
        $this->dropForeignKey('fk_user_profile_id_tags', 'tags');

        $this->dropForeignKey('fk_tag_id_tag_variables', 'tag_variables');
        $this->dropForeignKey('fk_variable_id_tag_variables', 'tag_variables');

        $this->dropForeignKey('fk_user_profile_id_tests', 'tests');
        $this->dropForeignKey('fk_type_id_tests', 'tests');
        $this->dropForeignKey('fk_parent_id_tests', 'tests');

        $this->dropForeignKey('fk_user_profile_id_types', 'types');

        $this->dropForeignKey('fk_type_id_type_variables', 'type_variables');
        $this->dropForeignKey('fk_variable_id_type_variables', 'type_variables');

        $this->dropForeignKey('fk_user_profile_id_user_tests', 'user_tests');
        $this->dropForeignKey('fk_test_id_user_tests', 'user_test');

        $this->dropForeignKey('fk_user_test_id_test_answers', 'test_answers');
        $this->dropForeignKey('fk_answer_id_test_answers', 'test_answers');

        $this->dropForeignKey('fk_user_test_id_test_variables', 'test_variables');
        $this->dropForeignKey('fk_variable_id_test_variables', 'test_variables');

        $this->dropForeignKey('fk_user_profile_id_variables', 'variables');

        $this->dropForeignKey('fk_user_profile_id_variable_details', 'variable_details');
        $this->dropForeignKey('fk_variable_id_variable_details', 'variable_details');
    }

}
