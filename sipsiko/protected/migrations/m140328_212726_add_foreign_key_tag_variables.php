<?php

class m140328_212726_add_foreign_key_tag_variables extends CDbMigration {

    public function up() {
        $this->addForeignKey('fk_tag_id_tag_variables', 'tag_variables', 'tag_id', 'tags', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_variable_detail_id_tag_variables', 'tag_variables', 'variable_id', 'variable_details', 'id', 'CASCADE', 'CASCADE');
    }

    public function down() {
        $this->dropForeignKey('fk_tag_id_tag_variables', 'tag_variables');
        $this->dropForeignKey('fk_variable_id_tag_variables', 'tag_variables');
    }

}
