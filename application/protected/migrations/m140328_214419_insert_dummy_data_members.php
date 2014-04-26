<?php

class m140328_214419_insert_dummy_data_members extends CDbMigration {

    public function up() {
        $userModel = User::model()->findByAttributes(array('username' => 'admin'));
        $positionAdmin = Position::model()->findBySlug(Role::ADMIN . '-' . Position::ADMIN);
        $row = array(
            array(
                'slug' => Member::slugify('Mahendri Winata'),
                'first_name' => 'Administrator',
                'last_name' => '',
                'address' => 'Jl. Penyu No.40 Bandung',
                'phone' => '085721821555',
                'photo' => '',
                'gender' => 1,
                'postion_id' => $positionAdmin->id
            ),
            array(
                'slug' => Member::slugify('Mahendri Winata'),
                'first_name' => 'Mahendri',
                'last_name' => 'Winata',
                'address' => 'Jl. Penyu No.40 Bandung',
                'phone' => '085721821555',
                'photo' => '',
                'gender' => 1
            ),
        );
        $user = array('member', 'risky', 'hendra', 'winata', 'ade', 'naufal', 'dio', 'rio', 'rudi', 'atang', 'dian', 'adrian', 'adi', 'alfian', 'nicky', 'ricky', 'reza', 'aldi', 'eka', 'hermawan', 'nana', 'doris', 'bagus', 'agus', 'ifan', 'adam', 'adit', 'agung', 'akbar');
        foreach ($user as $username) {
            $row[] = array(
                'slug' => Member::slugify($username),
                'first_name' => ucwords($username),
                'last_name' => '',
                'address' => '',
                'phone' => '',
                'photo' => '',
                'gender' => 1
            );
        }

        $position = Position::model()->findBySlug(Role::MEMBER . '-' . Position::MEMBER);
        foreach ($row as $key => $column) {
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            if (!isset($column['position_id']))
                $column['position_id'] = $position->id;
            $column['user_id'] = $userModel->id + $key;

            $this->insert('members', $column);
        }
    }

    public function down() {
        $this->truncateTable('members');
    }

}
