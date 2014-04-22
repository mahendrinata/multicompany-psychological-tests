<?php

class m140421_072041_insert_dummy_test_modalitas_belajar_paket_2 extends CDbMigration
{
	public function up() {
        $row = array(
            /**
             * 44 - Visual
             * 45 - Auditory
             * 46 - Kinesthetic
             */
            array(
                'slug' => Test::model()->slugify('Modalitas Belajar Paket 2'),
                'name' => 'Modalitas Belajar Paket 2',
                'description' => 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).',
                'is_expert' => true,
                'is_public' => true,
                'show_result' => true,
                'combination_variable' => 1,
                'user_profile_id' => 2,
                'type_id' => 5,
                'questions' => array(
                    array(
                        'description' => 'Kamu lebih gampang mengingat sesuatu kalau kamu menuliskannya',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Waktu guru menerangkan pelajaran di depan kelas, susah sekali buat kamu untuk mengerti',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Bagian kosong buku catatan suka kamu gambari atau tulisi saat guru menerangkan',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu tidak bisa belajar kalau ada keributan atau musik terdengar oleh mu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Di tempat sepi biasanya kamu bisa konsentrasi dengan baik',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu lebih senang jika sesuatu berwarna',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu seringkali "telat" kalau ada yang melontarkan "joke"',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Sewaktu ulangan, kamu membayangkan buku catatan kamu dalam pikiran',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Saat guru menerangkan, kamu merasa lebih bisa berkonsentrasi kalau menatap wajahnya',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu menuliskan instruksi yang kamu dapat, tidak hanya mendengarnya saja',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Catatan-catatan kamu berantakan sekali, tidak teratur',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mata kamu gampang capek walau kamu tidak pakai kacamata',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu tidak begitu mahir mengartikan bahasa tubuh seseorang',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu seringkali salah membaca suatu kata',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Lebih baik kamu disuruh mendengarkan guru menerangkan daripada disuruh membaca buku sendiri',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu sangat mudah mengingat sesuatu yang dikatakan oleh orang',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu paling tidak suka jika mendapat tugas menulis essay atau laporan, lebih baik ditanya secara lisan',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu kesulitan membaca tulisan yang kecil-kecil, walau mata kamu sehat',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Instruksi/petunjuk tertulis membuat kamu bingung',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Membaca membuat tangan kamu pegal karena harus menunjuk tiap kata yang sedang dibaca, kalau tidak, melantur kemana-mana',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Teman-teman kamu tidak mengerti kalau kamu memberi instruksi',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Waktu yang kamu butuhkan untuk mengerjakan tugas cukup lama, karena kamu harus berjalan ke sana kemari, beristirahat sebentar, atau mengerjakan hal lain, untuk mendapatkan ide lebih lanjut',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Duduk terlalu lama menyiksa kamu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Daripada memikirkannya matang-matang, kamu memilih "trial-error" kalau menghadapi suatu masalah',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Biasanya kamu langsung mengerjakan sesuatu tanpa harus melihat instruksinya terlebih dahulu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang berolah raga dan cukup mahir pada beberapa cabang olah raga',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Teman kamu bilang "Repot sekali melihat kamu menerangkan sesuatu, tangan kamu tidak bisa diam. Pasti ikut menerangkan juga"',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu melihat sesuatu yang sudah jadi, kemudian kamu suka membuatnya sendiri',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang membaca buku pelajaran sambil naik sepeda statis/olahraga ditempat lainnya',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Agar kamu dapat mengerti pelajaran, kamu suka menulis ulang atau mengetik catatan pelajaran kamu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => 46
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
                $question['test_id'] = 5;
                $question['status'] = Status::ACTIVE;
                $question['created_at'] = date('Y-m-d H:i:s');
                $question['updated_at'] = date('Y-m-d H:i:s');

                $answers = $question['answers'];
                unset($question['answers']);
                $this->insert('questions', $question);
                foreach ($answers as $answer) {
                    $answer['question_id'] = $id + 157;
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