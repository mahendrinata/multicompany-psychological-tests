<?php

class m140328_212817_add_foreign_key_type_variables extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_type_id_type_variables', 'type_variables', 'type_id', 'types', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_id_type_variables', 'type_variables', 'variable_id', 'variables', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_type_id_type_variables', 'type_variables');
        $this->dropForeignKey('fk_variable_id_type_variables', 'type_variables');
    }

}
