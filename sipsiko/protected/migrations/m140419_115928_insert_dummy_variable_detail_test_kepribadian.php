<?php

class m140419_115928_insert_dummy_variable_detail_test_kepribadian extends CDbMigration
{
	public function up() {
        $slug = Type::model()->slugify('Kepribadian');

        $sanguinisSlug = Variable::model()->slugify('Sanguinis');
        $sanguinisModel = Variable::model()->findBySlug($slug . '-' . $sanguinisSlug);

        $kolerisSlug = Variable::model()->slugify('Koleris');
        $kolerisModel = Variable::model()->findBySlug($slug . '-' . $kolerisSlug);

        $melankolisSlug = Variable::model()->slugify('Melankolis');
        $melankolisModel = Variable::model()->findBySlug($slug . '-' . $melankolisSlug);

        $plegmatisSlug = Variable::model()->slugify('Plegmatis');
        $plegmatisModel = Variable::model()->findBySlug($slug . '-' . $plegmatisSlug);
        $row = array(
            array(
                'slug' => $sanguinisModel->id,
                'description' => '<p>Kekuatan :<ul><li>Suka bicara.</li><li>Secara fisik memegang pendengar, emosional dan demonstratif.</li><li>Antusias dan ekspresif.</li><li>Ceria dan penuh rasa ingin tahu.</li><li>Hidup di masa sekarang.</li><li>Mudah berubah (banyak kegiatan / keinginan).</li><li>Berhati tulus dan kekanak-kanakan.</li><li>Senang kumpul dan berkumpul (untuk bertemu dan bicara).</li><li>Umumnya hebat di permukaan.</li><li>Mudah berteman dan menyukai orang lain.</li><li>Senang dengan pujian dan ingin menjadi perhatian.</li><li>Menyenangkan dan dicemburui orang lain.</li><li>Mudah memaafkan (dan tidak menyimpan dendam).</li><li>Mengambil inisiatif/ menghindar dari hal-hal atau keadaan yang membosankan.</li><li>Menyukai hal-hal yang spontan.</li></ul></p><p>Kelemahan :<ul><li>Suara dan tertawa yang keras (bahkan terlalu keras).</li><li>Membesar-besarkan suatu hal / kejadian.</li><li>Susah untuk diam.</li><li>Mudah ikut-ikutan atau dikendalikan oleh keadaan atau orang lain (suka ikutan Gank).</li><li>Sering minta persetujuan, termasuk hal-hal yang sepele.</li><li>RKP (Rentang Konsentrasi Pendek) alias pelupa.</li><li>Dalam bekerja lebih suka bicara dan melupakan kewajiban (awalnya saja antusias).</li><li>Mudah berubah-ubah.</li><li>Susah datang tepat waktu jam kantor.</li><li>Prioritas kegiatan kacau.</li><li>Mendominasi percakapan, suka menyela dan susah mendengarkan dengan tuntas.</li><li>Sering mengambil permasalahan orang lain, menjadi seolah-olah masalahnya.</li><li>Egoistis alias suka mementingkan diri sendiri.</li><li>Sering berdalih dan mengulangi cerita-cerita yg sama.</li><li>Konsentrasi ke “How to spend money” daripada “How to earn/save money”</li></ul</p>',
                'user_profile_id' => 2,
                'combinations' => array(
                    array(
                        'variable_id' => $sanguinisModel->id,
                    )
                )
            ),
            array(
                'slug' => $kolerisModel->id,
                'description' => '<p>Kekuatan :<ul><li>Senang memimpin, membuat keputusan, dinamis dan aktif.</li><li>Sangat memerlukan perubahan dan harus mengoreksi kesalahan.</li><li>Berkemauan keras dan pasti untuk mencapai sasaran/ target.</li><li>Bebas dan mandiri.</li><li>Berani menghadapi tantangan dan masalah.</li><li>“Hari ini harus lebih baik dari kemarin, hari esok harus lebih baik dari hari ini”.</li><li>Mencari pemecahan praktis dan bergerak cepat.</li><li>Mendelegasikan pekerjaan dan orientasi berfokus pada produktivitas.</li><li>Membuat dan menentukan tujuan.</li><li>Terdorong oleh tantangan dan tantangan.</li><li>Tidak begitu perlu teman.</li><li>Mau memimpin dan mengorganisasi.</li><li>Biasanya benar dan punya visi ke depan.</li><li>Unggul dalam keadaan darurat.</li></ul</p><p>Kelemahan :<ul><li>Tidak sabar dan cepat marah (kasar dan tidak taktis).</li><li>Senang memerintah.</li><li>Terlalu bergairah dan tidak/susah untuk santai.</li><li>Menyukai kontroversi dan pertengkaran.</li><li>Terlalu kaku dan kuat/ keras.</li><li>Tidak menyukai air mata dan emosi tidak simpatik.</li><li>Tidak suka yang sepele dan bertele-tele / terlalu rinci.</li><li>Sering membuat keputusan tergesa-gesa.</li><li>Memanipulasi dan menuntut orang lain, cenderung memperalat orang lain.</li><li>Menghalalkan segala cara demi tercapainya tujuan.</li><li>Workaholics (cinta mati dengan pekerjaan).</li><li>Amat sulit mengaku salah dan meminta maaf.</li><li>Mungkin selalu benar tetapi tidak populer.</li></ul</p>',
                'user_profile_id' => 2,
                'combinations' => array(
                    array(
                        'variable_id' => $kolerisModel->id,
                    )
                )
            ),
            array(
                'slug' => $melankolisModel->id,
                'description' => '<p>Kekuatan :<ul><li>Analitis, mendalam, dan penuh pikiran.</li><li>Serius dan bertujuan, serta berorientasi jadwal.</li><li>Artistik, musikal dan kreatif (filsafat & puitis).</li><li>Sensitif.</li><li>Mau mengorbankan diri dan idealis.</li><li>Standar tinggi dan perfeksionis.</li><li>Senang perincian/memerinci, tekun, serba tertib dan teratur (rapi).</li><li>Hemat.</li><li>Melihat masalah dan mencari solusi pemecahan kreatif (sering terlalu kreatif).</li><li>Kalau sudah mulai, dituntaskan.</li><li>Berteman dengan hati-hati.</li><li>Puas di belakang layar, menghindari perhatian.</li><li>Mau mendengar keluhan, setia dan mengabdi.</li><li>Sangat memperhatikan orang lain.</li></ul></p><p>Kelemahan :<ul><li>Cenderung melihat masalah dari sisi negatif (murung dan tertekan).</li><li>Mengingat yang negatif & pendendam.</li><li>Mudah merasa bersalah dan memiliki citra diri rendah.</li><li>Lebih menekankan pada cara daripada tercapainya tujuan.</li><li>Tertekan pada situasi yg tidak sempurna dan berubah-ubah.</li><li>Melewatkan banyak waktu untuk menganalisa dan merencanakan.</li><li>Standar yang terlalu tinggi sehingga sulit disenangkan.</li><li>Hidup berdasarkan definisi.</li><li>Sulit bersosialisasi (cenderung pilih-pilih).</li><li>Tukang kritik, tetapi sensitif terhadap kritik/ yg menentang dirinya.</li><li>Sulit mengungkapkan perasaan (cenderung menahan kasih sayang).</li><li>Rasa curiga yg besar (skeptis terhadap pujian).</li><li>Memerlukan persetujuan.</li></ul></p>',
                'user_profile_id' => 2,
                'combinations' => array(
                    array(
                        'variable_id' => $melankolisModel->id,
                    )
                )
            ),
            array(
                'slug' => $plegmatisModel->id,
                'description' => '<p>Kekuatan :<ul><li>Mudah bergaul, santai, tenang dan teguh.</li><li>Sabar, seimbang, dan pendengar yang baik.</li><li>Tidak banyak bicara, tetapi cenderung bijaksana.</li><li>Simpatik dan baik hati (sering menyembunyikan emosi).</li><li>Kuat di bidang administrasi, dan cenderung ingin segalanya terorganisasi.</li><li>Penengah masalah yg baik.</li><li>Cenderung berusaha menemukan cara termudah.</li><li>Baik di bawah tekanan.</li><li>Menyenangkan dan tidak suka menyinggung perasaan.</li><li>Rasa humor yg tajam.</li><li>Senang melihat dan mengawasi.</li><li>Berbelaskasihan dan peduli.</li><li>Mudah diajak rukun dan damai.</li></ul></p><p>Kelemahan :<ul><li>Kurang antusias, terutama terhadap perubahan/ kegiatan baru.</li><li>Takut dan khawatir.</li><li>Menghindari konflik dan tanggung jawab.</li><li>Keras kepala, sulit kompromi (karena merasa benar).</li><li>Terlalu pemalu dan pendiam.</li><li>Humor kering dan mengejek (Sarkatis).</li><li>Kurang berorientasi pada tujuan.</li><li>Sulit bergerak dan kurang memotivasi diri.</li><li>Lebih suka sebagai penonton daripada terlibat.</li><li>Tidak senang didesak-desak.</li><li>Menunda-nunda / menggantungkan masalah.</li></ul></p>',
                'user_profile_id' => 2,
                'combinations' => array(
                    array(
                        'variable_id' => $plegmatisModel->id,
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
            $column['status'] = Status::ACTIVE;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $combinations = $column['combinations'];
            unset($column['combinations']);
            $this->insert('variable_details', $column);
            foreach ($combinations as $combination) {
                $combination['variable_detail_id'] = $key + $startVariableDetail;
                $combination['created_at'] = date('Y-m-d H:i:s');
                $combination['updated_at'] = date('Y-m-d H:i:s');
                $this->insert('combinations', $combination);
            }
        }
    }

    public function down() {
    }
}