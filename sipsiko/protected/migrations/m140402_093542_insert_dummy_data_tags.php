<?php

class m140402_093542_insert_dummy_data_tags extends CDbMigration {

    public function up() {

        $row = array(
            'Pekerjaan' => array(
                'Arsitek', 'Administratur', 'Apoteker', 'Akuntan', 'Astronaut',
                'Bidan', 'Buruh',
                'Camat', 'Calo',
                'Dokter', 'Dosen', 'Direktur', 'Desainer', 'Diktator',
                'Editor',
                'Fasset',
                'Guru', 'Gammer',
                'Hakim',
                'Ilustrator', 'Ilmuwan',
                'Jaksa',
                'Kasir', 'Kondektur', 'Koki', 'Kiai',
                'Lurah',
                'Manajer', 'Masinis',
                'Nelayan', 'Novelis',
                'Operator',
                'Pastur', 'Pegawai negeri', 'Pelacur', 'Pelukis', 'Pendeta', 'Penyanyi', 'Pemahat', 'Pengacara', 'Perancang Grafis', 'Politikus', 'Peneliti', 'Polisi', 'Psikolog', 'Psikiater', 'Penipu', 'Peretas', 'Pengusaha', 'PSK', 'Perminyakan', 'Pramugari', 'Photographer', 'Programmer',
                'Raja', 'Refractionis Optisen', 'Resepsionis',
                'Satpam', 'Seniman', 'Supir', 'Sekretaris', 'Selebritis',
                'Tani', 'Tukang', 'TNI',
                'Ustad', 'Ulama',
            ),
        );

        $iterator = 1;
        foreach ($row as $key => $tags) {
            $this->insertTag($key);
            foreach ($tags as $tag) {
                $this->insertTag($tag, $iterator);
            }
            $iterator++;
        }
    }

    public function insertTag($name = NULL, $parent_id = NULL) {
        $this->insert('tags', array(
            'slug' => Tag::model()->slugify($name),
            'name' => $name,
            'status' => Status::ACTIVE,
            'user_profile_id' => 2,
            'parent_id' => $parent_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
    }

    public function down() {
        $this->truncateTable('tags');
    }

}
