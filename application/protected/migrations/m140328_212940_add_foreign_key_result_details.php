<?php

class m140328_212940_add_foreign_key_result_details extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_result_id_result_details', 'result_details', 'result_id', 'experts', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_detail_id_result_details', 'result_details', 'variable_detail_id', 'variable_details', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_result_id_result_details', 'result_details');
        $this->dropForeignKey('fk_variable_detail_id_result_details', 'result_details');
    }

}
