<?php

class m140426_173233_insert_dummy_data_accesses extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $row = array(
            array(
                'slug' => Access::slugify(''),
                'name' => ucwords(Status::DRAFT),
                'url' => '',
                'params' => '',
            ),
        );
        foreach ($row as $column) {
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['created_by'] = $user->id;
            $column['created_at'] = date('Y-m-d H:i:s');

            $this->insert('statuses', $column);
        }
    }

    public function down() {
        $this->truncateTable('statuses');
    }

}
