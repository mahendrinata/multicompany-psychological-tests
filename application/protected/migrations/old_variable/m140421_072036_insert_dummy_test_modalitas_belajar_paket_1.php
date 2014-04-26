<?php

class m140421_072036_insert_dummy_test_modalitas_belajar_paket_1 extends CDbMigration {

    public function up() {
        $row = array(
            /**
             * 44 - Visual
             * 45 - Auditory
             * 46 - Kinesthetic
             */
            array(
                'slug' => Test::slugify('Modalitas Belajar Paket 1'),
                'name' => 'Modalitas Belajar Paket 1',
                'description' => 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).',
                'is_expert' => true,
                'is_public' => true,
                'show_result' => true,
                'combination_variable' => 1,
                'user_profile_id' => 2,
                'type_id' => 5,
                'questions' => array(
                    array(
                        'description' => 'Ketika merangkai suatu barang, kamu lebih suka',
                        'answers' => array(
                            array(
                                'description' => 'Mengikuti ilustrasi cara merangkainya',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Mendengarkan orang membacakan instruksinya untukmu',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Langsung mengerjakannya tanpa mengikuti instruksi',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Jika akan menghadapi ulangan, kamu mudah hafal jika',
                        'answers' => array(
                            array(
                                'description' => 'Membolak-balik buku membaca materi ulangan',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Menghafal materi ulangan sambil mengucapkannya keras-keras',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Berjalan bolak-balik sambil menghafal',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Saat membaca suatu buku, yang sering kamu lakukan adalah',
                        'answers' => array(
                            array(
                                'description' => 'Membacanya dengan tenang, cepat dan tekun',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Membaca sambil menggerakkan bibir dan mengucapkannya',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Menelusuri tiap-tiap kata dengan jari telunjukmu',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Saat berbicara, kamu',
                        'answers' => array(
                            array(
                                'description' => 'Berbicara dengan cepat',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Berbicara dengan kecepatan sedang',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Berbicara dengan kecepatan lambat',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Di waktu luang, kamu biasanya',
                        'answers' => array(
                            array(
                                'description' => 'Menonton televisi, membaca, mengisi TTS',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Mendengarkan radio, mengobrol',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Berjalan-jalan, olah raga, hiking',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kalau kamu marah, biasanya paling terlihat dari',
                        'answers' => array(
                            array(
                                'description' => 'Ekspresi wajah',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Intonasi suara',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Gerak tubuh',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Biasanya pada saat kamu tidak ada kegiatan',
                        'answers' => array(
                            array(
                                'description' => 'Melamun, menatap ke angkasa',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Bebicara dengan diri sendiri',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Gelisah tak bisa duduk tenang',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Pilih kegiatan yang kamu merasa nyaman melakukannya',
                        'answers' => array(
                            array(
                                'description' => 'Menulis, menggambar, Mendesain',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Berdebat, bercerita dan bermain musik',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Menari , berolahraga, membuat kerajinan tangan',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kata-kata khas kamu saat berbicara',
                        'answers' => array(
                            array(
                                'description' => '"Lihat baik-baik…"',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => '"Dengarkan baik-baik…"',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => '"Rasakan baik-baik…"',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mana yang paling sering terjadi saat di sekolah',
                        'answers' => array(
                            array(
                                'description' => 'Kamu memperhatikan wajah guru saat beliau berbicara/menerangkan',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kamu mendengarkan saja waktu guru menerangkan',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Saat guru menerangkan, tangan kamu tidak bisa diam, memain-mainkan ballpoint',
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
                $question['test_id'] = 4;
                $question['status'] = Status::ACTIVE;
                $question['created_at'] = date('Y-m-d H:i:s');
                $question['updated_at'] = date('Y-m-d H:i:s');

                $answers = $question['answers'];
                unset($question['answers']);
                $this->insert('questions', $question);
                foreach ($answers as $answer) {
                    $answer['question_id'] = $id + 147;
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
