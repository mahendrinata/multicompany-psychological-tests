<?php

class m140328_214350_insert_dummy_data_statuses extends CDbMigration {

    public function up() {
        $row = array(
            array(
                'slug' => Status::DRAFT,
                'name' => ucwords(Status::DRAFT),
                'description' => '',
            ),
            array(
                'slug' => Status::ACTIVE,
                'name' => ucwords(Status::ACTIVE),
                'description' => '',
            ),
            array(
                'slug' => Status::INACTIVE,
                'name' => ucwords(Status::INACTIVE),
                'description' => '',
            ),
            array(
                'slug' => Status::FINISH,
                'name' => ucwords(Status::FINISH),
                'description' => '',
            ),
            array(
                'slug' => Status::VOID,
                'name' => ucwords(Status::VOID),
                'description' => '',
        ));
        foreach ($row as $column) {
            $column['created_at'] = date('Y-m-d H:i:s');

            $this->insert('statuses', $column);
        }
    }

    public function down() {
        $this->truncateTable('statuses');
    }

}
