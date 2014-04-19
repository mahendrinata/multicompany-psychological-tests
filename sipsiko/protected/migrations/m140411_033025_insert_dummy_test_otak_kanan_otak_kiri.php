<?php

class m140411_033025_insert_dummy_test_otak_kanan_otak_kiri extends CDbMigration {

    public function up() {
        $row = array(
            /**
             * 47 - Otak Kanan
             * 48 - Otak Kiri
             */
            array(
                'slug' => Test::model()->slugify('Otak Kanan Otak Kiri'),
                'name' => 'Otak Kanan Otak Kiri',
                'is_expert' => true,
                'is_public' => true,
                'show_result' => true,
                'combination_variable' => 1,
                'user_profile_id' => 2,
                'type_id' => 6,
                'questions' => array(
                    array(
                        'description' => 'Jika kamu duduk sebangku berdua, kamu pilih duduk di sisi kiri atau kanan',
                        'answers' => array(
                            array(
                                'description' => 'Kanan',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Kiri',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kalau menghadapi ujian, kamu lebih baik mendapat soal pilihan ganda (objektif) atau soal essay (subjektif)',
                        'answers' => array(
                            array(
                                'description' => 'Subjektif',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Objectif',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Seringkah kamu mendapatkan firasat/perasaan tertentu',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Jika ya, apakah kamu mengikuti firasat/perasaan tersebut',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu meletakkan barang-barang pada tempatnya, dan segala sesuatu di kamarmu tertata rapi',
                        'answers' => array(
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Ketika kamu mempelajari suatu gerakan olah raga/tarian, manakah yang lebih mudah bagimu',
                        'answers' => array(
                            array(
                                'description' => 'Meniru gerakan instruktur dan merasakan "musik" yang mengiringi',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Mempelajari tahapan tiap-tiap langkah sambil berkata-kata pada diri sendiri selama melakukannya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu suka memindah-mindahkan barang di kamar kamu setelah beberapa waktu, atau membiarkannya tetap sama dari waktu ke waktu',
                        'answers' => array(
                            array(
                                'description' => 'Memindahkan',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Membiarkan',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Dapatkah kamu memperhitungkan waktu tanpa harus melihat jam',
                        'answers' => array(
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Pelajaran manakah yang lebih kamu sukai',
                        'answers' => array(
                            array(
                                'description' => 'Geometri',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Aljabar',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu lebih mudah mengingat wajah seseorang atau mengingat nama seseorang',
                        'answers' => array(
                            array(
                                'description' => 'Wajah',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Nama',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Jika kamu diberi topik tentang "Sekolah" manakah yang lebih mudah bagi kamu untuk mengekspresikan pikiran kamu',
                        'answers' => array(
                            array(
                                'description' => 'Melalui gambar',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Melalui tulisan',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Ketika seseorang berbicara kepadamu, manakah yang lebih kamu perhatikan, apa yang dia katakan, atau nada bicaranya',
                        'answers' => array(
                            array(
                                'description' => 'Nada bicara',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Apa yang dikatakan',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Ketika kamu berbicara, apakah kamu menggerak-gerakkan tanganmu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Jarang',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Meja belajar atau tempat kamu belajar biasanya',
                        'answers' => array(
                            array(
                                'description' => 'Berantakan dengan barang-barang yang mungkin kamu perlukan',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Rapi teratur',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Lebih mudah yang mana bagi kamu',
                        'answers' => array(
                            array(
                                'description' => 'Menangkap ide suatu paragraf',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Menangkap detail suatu paragraf',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat berpikir dengan lebih baik pada saat duduk atau berbaring',
                        'answers' => array(
                            array(
                                'description' => 'Berbaring',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Duduk',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mana yang lebih nyaman untuk kamu',
                        'answers' => array(
                            array(
                                'description' => 'Berbicara tentang atau melakukan hal-hal yang lucu',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => '. Berbicara tentang atau melakukan hal-hal yang masuk akal',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Saat mengerjakan persoalan matematika',
                        'answers' => array(
                            array(
                                'description' => 'Kamu dapat menjawab tapi tidak tahu bagaimana cara menjelaskannya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Kamu dapat menjelaskan dengan rinci bagaimana kamu mendapatkan jawabannya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu selalu dapat menemukan kata-kata yang tepat untuk mengekspresikan perasaan kamu',
                        'answers' => array(
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu suka melamun dan melamunkan hal-hal yang menyenangkan',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu tertarik pada Psikologi atau Penyembuhan Holistik',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu pernah mengalami "de javu" (merasa pernah melihat/mengalami sesuatu pada waktu lampau',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu tertarik pada musik, lukisan, tarian, atau hal lain yang mengekspresikan keindahan',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu suka mengingat-ingat masa lalu',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu termasuk orang yang romantis, atau menyukai keindahan',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu cukup sabar untuk melihat dari berbagai sudut dalam memecahkan suatu masalah',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudahkah untukmu mengelompokkan berkas-berkas dan membuang yang tidak perlu',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu sering terlalu cepat mengambil keputusan dan atau bertindak spontan',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Menurut kamu, cukup objektifkah kamu dalam menilai sesuatu, dan memperhatikan fakta-fakta yang ada sebelum mengambil keputusan',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudahkah kamu merasa sedih, atau mudahkah bagi kamu untuk menangis',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah pada umumnya kamu berpikir secara logis dan memikirkan mengapa orang-orang bertindak seperti itu',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                        )
                    ),
                    array(
                        'description' => 'Seringkah kamu mengambil keputusan berdasarkan perasaan',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu sering merasa tidak punya cukup waktu',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudahkah bagi kamu untuk belajar melalui observasi dan melakukannya',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                    array(
                        'description' => 'Tertarikkah kamu pada teknologi dan perlengkapannya secara teknis',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                        )
                    ),
                    array(
                        'description' => 'Apakah kamu memiliki kemampuan untuk menggambar sebuat sketsa kasar dan menjelaskannya',
                        'answers' => array(
                            array(
                                'description' => 'Ya',
                                'value' => 1,
                                'variable_id' => 47
                            ),
                            array(
                                'description' => 'Tidak',
                                'value' => 1,
                                'variable_id' => 48
                            ),
                        )
                    ),
                )
            )
        );
        
        foreach ($row as $column) {
            $column['status'] = Status::ACTIVE;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $questions = $column['questions'];
            unset($column['questions']);
            $this->insert('tests', $column);
            foreach ($questions as $id => $question) {
                $question['test_id'] = 2;
                $question['status'] = Status::ACTIVE;
                $question['created_at'] = date('Y-m-d H:i:s');
                $question['updated_at'] = date('Y-m-d H:i:s');

                $answers = $question['answers'];
                unset($question['answers']);
                $this->insert('questions', $question);
                foreach ($answers as $answer) {
                    $answer['question_id'] = $id + 71;
                    $answer['status'] = Status::ACTIVE;
                    $answer['created_at'] = date('Y-m-d H:i:s');
                    $answer['updated_at'] = date('Y-m-d H:i:s');
                    $this->insert('answers', $answer);
                }
            }
        }
    }

    public function down() {
        $this->truncateTable('tests');
        $this->truncateTable('questions');
        $this->truncateTable('answers');
    }

}
