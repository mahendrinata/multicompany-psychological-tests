<?php

class m140328_212934_add_foreign_key_combinations extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_variable_id_combinations', 'combinations', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_detail_id_combinations', 'combinations', 'variable_detail_id', 'variable_details', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_variable_id_combinations', 'combinations');
        $this->dropForeignKey('fk_variable_detail_id_combinations');
    }

}
