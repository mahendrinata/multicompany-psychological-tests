<?php

class m140411_033056_insert_dummy_variable_detail_test_otak_kanan_otak_kiri extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::model()->slugify('Otak Kanan Otak Kiri');

        $kananSlug = Variable::model()->slugify('Otak Kanan');
        $kananModel = Variable::model()->findBySlug($slug . '-' . $kananSlug);

        $kiriSlug = Variable::model()->slugify('Otak Kiri');
        $kiriModel = Variable::model()->findBySlug($slug . '-' . $kiriSlug);

        $row = array(
            array(
                'slug' => $kananModel->id,
                'shortness' => 'Otak Kanan',
                'name' => 'Otak Kanan',
                'description' => '<p>Karakteristik Otak Kanan : Global, Acak, Kongkrit, Intuitif, Non verbal, Berdasarkan dunia fantasi. Otak kanan memproses informasi non verbal dan hal-hal kongkrit seperti gambar dan warna. Kamu lebih mudah menangkap hal-hal yang disampaikan lewat visual (berupa gambar atau benda kongkrit) serta sensitif terhadap warna-warna. Dengan dominasi otak kanan, kamu perlu menangkap dahulu gambaran konsep umum suatu pelajaran untuk dapat memahami bagian demi bagiannya.</p><p>Dalam mengerjakan suatu permasalahan, seringkali kamu mendapatkan jawabannya tanpa dapat menjelaskan dengan pasti bagaimana ia mendapatkannya. Untuk memudahkan belajar kamu dapat menghayalkan diri menjadi hal-hal yang sedang dipelajari.</p><p>Kamu biasanya kurang dapat mengikuti kegiatan di kelas yang monoton, ia akan gelisah di tempat duduknya. Karena proses berpikirnya didominasi fantasi, tak seperti teman-teman dengan dominasi otak kiri yang berpikir berdasarkan realitas, kamu seringkali dinilai sulit mengikuti aturan karena merasa tidak ada yang salah dengan apa yang kamu kerjakan. Umumnya kamu cukup kreatif dan cocok untuk berkegiatan dalam bidang seni dan kegiatan-kegiatan artistik lainnya.</p><p>Coba lakukan beberapa saran berikut ini untuk mengaktifkan otak kiri:<ol><li>Mencoba untuk menguasai salah satu program komputer lebih baik lagi dari hanya sekedar mengetik.</li><li>Setelah menonton film favorit kamu, cobalah menulis satu tulisan tentang pendapat kamu atas film itu secara kritis.</li><li>Susunlah buku-buku koleksi kamu berdasarkan urutan jenisnya.</li><li>Usahakanlah tepat waktu sepanjang hari.</li><li>Bacalah setiap petunjuk penggunaan sebelum memakai suatu barang, atau merangkainya.</li><li>Jika menghadapi masalah, perhatikan aspek-aspek yang ada dan proses satu demi satu.</li><li>Catatlah pengeluaran pribadi kamu setiap hari.</li><li>Beranilah untuk mulai melakukan itu semua!</li><li>Temukan berbagai cara lainnya untuk membentuk sedikit keteraturan pada hidupmu.</li></ol></p><p> Belahan manapun yang kamu gunakan secara dominan (atau mungkin merata), itu tidak menjadikan yang kanan lebih unggul dari yang dominan kiri atau sebaliknya. Masing-masing punya keunggulan dan kelemahannya tersendiri. Yang perlu kamu lakukan adalah mencoba meperbaiki kekuranganmu, dan mengasah keunggulanmu agar kamu bisa lebih maju.</p>',
                'combinations' => array(
                    array(
                        'variable_id' => $kananModel->id,
                    )
                )
            ),
            array(
                'slug' => $kiriModel->id,
                'shortness' => 'Otak Kiri',
                'name' => 'Otak Kiri',
                'description' => '<p>Karakteristik Otak Kiri: Teratur, Bertahap, Simbolis, Logis, Verbal, Berdasarkan dunia nyata.</p><p>Dengan dominasi otak kiri, mudah bagi kamu dalam memproses informasi verbal (seperti angka-angka, tulisan), hal-hal abstrak dengan cara yang bertahap, teratur dan memproses bagian demi bagian untuk membentuk pengertian/ konsep secara keseluruhan. Kamu biasanya dapat belajar dengan tenang, tidak mengalami kesulitan dalam pelajaran-pelajaran yang dianggap penting (calistung) dan seringkali berprestasi.</p><p>Kamu mudah mengikuti peraturan, dan umumnya tepat waktu saat mengumpulkan tugas. Kamu biasanya taat pada aturan, mencapai kesimpulan secara logis dan cocok untuk kegiatan-kegiatan yang bersifat ilmiah dan matematis.</p><p>Coba lakukan hal berikut ini untuk mengaktifkan otak kanan<ol><li>Belajar menikmati waktu luang, mencoba bersantai.</li><li>Bermainlah dengan tanah liat, coba rasakan asyiknya.</li><li>Sesekali naiklah angkutan kota tanpa tujuan khusus, perhatikan sekeliling.</li><li>Sisihkan waktu untuk "merasakan" diri kamu, mengendurkan ketegangan</li><li>Bacalah cerpen atau kisah-kisah lucu.</li><li>Buatlah logo pribadi yang menggambarkan diri kamu.</li><li>Perhatikanlah tanaman dan binatang yang ada di sekitar rumah kamu.</li><li>Beranilah untuk mulai melakukan itu semua!</li><li>Temukan berbagai cara lainnya untuk keluar dari rutinitas kamu sehari-hari.</li></ol></p><p> Belahan manapun yang kamu gunakan secara dominan (atau mungkin merata), itu tidak menjadikan yang kanan lebih unggul dari yang dominan kiri atau sebaliknya. Masing-masing punya keunggulan dan kelemahannya tersendiri. Yang perlu kamu lakukan adalah mencoba meperbaiki kekuranganmu, dan mengasah keunggulanmu agar kamu bisa lebih maju.</p>',
                'combinations' => array(
                    array(
                        'variable_id' => $kiriModel->id,
                    )
                )
            ),
        );

        $variableDetailModel = VariableDetail::model()->find(array('order' => 'id DESC'));
        $startVariableDetail = 1;
        if (!empty($variableDetailModel)) {
            $startVariableDetail = $startVariableDetail + $variableDetailModel->id;
        }

        foreach ($row as $key => $column) {
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['expert_id'] = 1;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['created_by'] = $user->id;

            $combinations = $column['combinations'];
            unset($column['combinations']);
            $this->insert('variable_details', $column);
            foreach ($combinations as $combination) {
                $combination['variable_detail_id'] = $key + $startVariableDetail;
                $combination['created_at'] = date('Y-m-d H:i:s');
                $this->insert('combinations', $combination);
            }
        }
    }

    public function down() {
        
    }

}
