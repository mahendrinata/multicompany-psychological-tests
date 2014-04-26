<?php

class m140328_214417_insert_dummy_data_experts extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'admin'));
        $row = array(
            array(
                'slug' => Expert::slugify('PT. Psikolog Nasional'),
                'name' => 'PT. Psikolog Nasional',
                'address' => 'Jl. Penyu No.40 Bandung',
                'phone' => '085721821555',
                'photo' => '',
            ),
        );
        foreach ($row as $column) {
            $column['created_by'] = $user->id;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);

            $this->insert('experts', $column);

            $position = Position::model()->findBySlug(Role::EXPERT . '-' . Position::OWNER);
            $this->insert('expert_users', array(
                'expert_id' => 1,
                'user_id' => $user->id,
                'position_id' => $position->id,
                'status_id' => Status::model()->getStatusIdBySlug(Status::ACTIVE),
                'created_by' => $user->id,
                'created_at' => date('Y-m-d')
            ));
        }
    }

    public function down() {
        $this->truncateTable('expert_users');
        $this->truncateTable('experts');
    }

}
