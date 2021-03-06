<?php

class m140407_071103_insert_dummy_variable_detail_test_modalita_belajar extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::slugify('Modalitas Belajar');

        $visualSlug = Variable::slugify('Visual');
        $visualModel = Variable::model()->findBySlug($slug . '-' . $visualSlug);

        $auditorySlug = Variable::slugify('Auditory');
        $auditoryModel = Variable::model()->findBySlug($slug . '-' . $auditorySlug);

        $kinestheticSlug = Variable::slugify('Kinesthetic');
        $kinestheticModel = Variable::model()->findBySlug($slug . '-' . $kinestheticSlug);
        $row = array(
            array(
                'slug' => $visualModel->id,
                'shortness' => 'Visual',
                'name' => 'Visual',
                'description' => '<p>Hal ini berarti kamu cenderung belajar dengan cara melihat sesuatu. Kamu menyukai melihat gambar atau diagram,menonton pertunjukan, demonstrasi suatu kegiatan, atau menyaksikan video.</p><p>Untuk mempermudah dan mempercepat kamu untuk memahami sesuatu (pelajaran atau hal yg lain) cobalah:</p><ul><li>Mengubah pelajaran yang kamu catat ke dalam bentuk poster-poster yang mudah dilihat, dengan gambar-gambar yang menarik, grafik,dan warnai seindah mungkin.</li><li>Buatlah peta konsep pelajaran dengan: mulai dari tema besar di tengah halaman, menggunakan kata-kata penting, menggunakan simbol, warna, kata, gambar yang mencolok, dan lakukan ini dengan gayamu sendiri.</li><li>Dalam mencatat pelajaran, gunakan tanda-tanda, gambar dan warna untuk menandai hal-hal penting agar dapat dengan mudah dilihat lagi jika kita mempelajarinya di lain waktu.</li><li>Untuk membantu mengingat apa yang baru kita baca dan dengar, duduklah dengan santai, dan bayangkan dalam pikiran apa yang baru dibaca/didengar, agar kita lebih paham lagi.</li></ul>',
                'combinations' => array(
                    array(
                        'variable_id' => $visualModel->id,
                    )
                )
            ),
            array(
                'slug' => $auditoryModel->id,
                'shortness' => 'Auditory',
                'name' => 'Auditory',
                'description' => '<p>Hal ini berarti kamu cenderung belajar dengan cara mendengar sesuatu. Kamu menyukai mendengar pidato, ceramah guru menerangkan, mendengarkan radio atau kaset, berdebat atau berdiskusi.Untuk mempermudah kamu memahami sesuatu (pelajaran atau hal yg lain) cobalah:</p><ul><li>Membaca pelajaran dengan cara baca yang dramatis, seperti pujangga membaca puisi misalnya, atau seperti scenario, bahkan cobalah menyanyikannya dengan irama iklan atau rap.Merangkum pelajaran untuk diucapkan dengan lantang, atau bahkan merekamnya dalam kaset, diselingi plesetan atau hal lain,dan memutarnya dengan walkman sepanjang perjalanan kita ke sekolah.</li><li>Saat membacakan dengan lantang, perhatikan intonasi, penekanan khusus, coba berbisik, dan coba juga sambil memejamkan mata untuk belajar membayangkan apa yang sedang dibacakan, sehingga secara tidak langsung kita telah mengaktifkan pula daya visual kita dalam belajar.</li></ul>',
                'combinations' => array(
                    array(
                        'variable_id' => $auditoryModel->id,
                    )
                )
            ),
            array(
                'slug' => $kinestheticModel->id,
                'shortness' => 'Kinesthetic',
                'name' => 'Kinesthetic',
                'description' => '<p>Hal ini berarti kamu cenderung belajar melalui aktivitas fisik dan melibatkan diri langsung. Kamu suka menyentuh, merasakan, membongkar sesuatu, melakukan olah tubuh.</p><p>Untuk mempercepat dan mempermudahmu memahami sesuatu (pelajaran atau lainnya, cobalah:</p><ul><li>Belajar sambil berjalan-jalan. Setiap kali membaca atau mendengarkan seseorang berbicara, bangkitlah untuk sedikit bergerak setiap 20-30 menit sekali.</li><li>Coba belajar dalam kelompok untuk membentuk suasana bermain peran (drama) dari pelajaran yang dibahas. </li><li>Tulislah kembali point-point penting dari catatan pelajaran ke dalam kartu-kartu yang disusun secara logis. </li><li>Buatlah semacam percobaan, atau model dari apa yang sedang kamu pelajari. Libatkan tubuh kamu dalam belajar dengan mencoba meniru apa yang dipelajari, atau bahkan meniru gaya-gaya lucu gurumu ketika mengajar agar kamu dapat mengingatnya dengan lebih baik!Setiap orang memiliki kekuatan dan kelemahannya masing-masing. </li><li>Dengan mengetahui kekuatanmu, kamu dapat meningkatkan prestasi dengan mengarahkan diri untuk mencari cara-cara belajar yang cocok dengan kecenderungan-kecenderungan pada dirimu. Jika kamu mau belajar mengaktifkan aspek-aspek yang kurang menonjol lainnya (tentu dengan menyisihkan waktu)prestasi kamu bisa berkembang lebih baik lagi! </li></ul>',
                'combinations' => array(
                    array(
                        'variable_id' => $kinestheticModel->id,
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
