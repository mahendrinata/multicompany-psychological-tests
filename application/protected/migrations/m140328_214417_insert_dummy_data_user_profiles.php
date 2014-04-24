<?php

class m140328_214417_insert_dummy_data_user_profiles extends CDbMigration {

    public function up() {
        $row = array(
            array(
                'first_name' => 'Administrator',
                'last_name' => '',
                'address' => '',
                'phone' => '',
                'photo' => '',
                'status' => Status::ACTIVE,
                'user_id' => 1,
                'role_id' => 1,
            ),
            array(
                'first_name' => 'PT. Psikolog Nasional',
                'last_name' => '',
                'address' => 'Jl. Penyu No.40 Bandung',
                'phone' => '085721821555',
                'photo' => '',
                'status' => Status::ACTIVE,
                'user_id' => 2,
                'role_id' => 2,
            ),
            array(
                'first_name' => 'CV. Madain',
                'last_name' => '',
                'address' => 'Jl. Penyu No.40 Bandung',
                'phone' => '085721821555',
                'photo' => '',
                'status' => Status::ACTIVE,
                'user_id' => 2,
                'role_id' => 3,
            ),
            array(
                'first_name' => 'Mahendri',
                'last_name' => 'Winata',
                'address' => 'Jl. Penyu No.40 Bandung',
                'phone' => '085721821555',
                'photo' => '',
                'status' => Status::ACTIVE,
                'user_id' => 2,
                'role_id' => 4,
            ),
            array(
                'first_name' => 'Expert',
                'last_name' => '',
                'address' => '',
                'phone' => '',
                'photo' => '',
                'status' => Status::ACTIVE,
                'user_id' => 3,
                'role_id' => 2,
            ),
            array(
                'first_name' => 'Company',
                'last_name' => '',
                'address' => '',
                'phone' => '',
                'photo' => '',
                'status' => Status::ACTIVE,
                'user_id' => 4,
                'role_id' => 3,
            ),
        );
        $user = array('member', 'risky', 'hendra', 'winata', 'ade', 'naufal', 'dio', 'rio', 'rudi', 'atang', 'dian', 'adrian', 'adi', 'alfian', 'nicky', 'ricky', 'reza', 'aldi', 'eka', 'hermawan', 'nana', 'doris', 'bagus', 'agus', 'ifan', 'adam', 'adit', 'agung', 'akbar');
        $i = 0;
        foreach ($user as $username) {
            $row[] = array(
                'first_name' => ucwords($username),
                'last_name' => '',
                'address' => '',
                'phone' => '',
                'photo' => '',
                'status' => Status::ACTIVE,
                'user_id' => 5 + $i,
                'role_id' => 4,
            );
            $i++;
        }
        foreach ($row as $column) {
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');
            
            $this->insert('user_profiles', $column);
        }
    }

    public function down() {
        $this->truncateTable('user_profiles');
    }

}
