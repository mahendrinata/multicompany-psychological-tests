<?php

class m140421_072036_insert_dummy_test_modalitas_belajar_paket_1 extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::model()->slugify('Modalitas Belajar');
        $typeModel = Type::model()->findBySlug($slug);

        $visualSlug = Variable::model()->slugify('Visual');
        $visualModel = Variable::model()->findBySlug($slug . '-' . $visualSlug);

        $auditorySlug = Variable::model()->slugify('Auditory');
        $auditoryModel = Variable::model()->findBySlug($slug . '-' . $auditorySlug);

        $kinestheticSlug = Variable::model()->slugify('Kinesthetic');
        $kinestheticModel = Variable::model()->findBySlug($slug . '-' . $kinestheticSlug);
        $row = array(
            /**
             * $visualModel->id - Visual
             * $auditoryModel->id - Auditory
             * $kinestheticModel->id - Kinesthetic
             */
            array(
                'slug' => Test::model()->slugify('Modalitas Belajar Paket 1'),
                'name' => 'Modalitas Belajar Paket 1',
                'description' => 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).',
                'publication_id' => Test::model()->getPublicationIdBySlug(Test::STATUS_PUBLIC),
                'show_result' => true,
                'combination_variable' => 1,
                'expert_id' => 1,
                'type_id' => $typeModel->id,
                'questions' => array(
                    array(
                        'description' => 'Ketika merangkai suatu barang, kamu lebih suka',
                        'answers' => array(
                            array(
                                'description' => 'Mengikuti ilustrasi cara merangkainya',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Mendengarkan orang membacakan instruksinya untukmu',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Langsung mengerjakannya tanpa mengikuti instruksi',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Jika akan menghadapi ulangan, kamu mudah hafal jika',
                        'answers' => array(
                            array(
                                'description' => 'Membolak-balik buku membaca materi ulangan',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Menghafal materi ulangan sambil mengucapkannya keras-keras',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Berjalan bolak-balik sambil menghafal',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Saat membaca suatu buku, yang sering kamu lakukan adalah',
                        'answers' => array(
                            array(
                                'description' => 'Membacanya dengan tenang, cepat dan tekun',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Membaca sambil menggerakkan bibir dan mengucapkannya',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Menelusuri tiap-tiap kata dengan jari telunjukmu',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Saat berbicara, kamu',
                        'answers' => array(
                            array(
                                'description' => 'Berbicara dengan cepat',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Berbicara dengan kecepatan sedang',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Berbicara dengan kecepatan lambat',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Di waktu luang, kamu biasanya',
                        'answers' => array(
                            array(
                                'description' => 'Menonton televisi, membaca, mengisi TTS',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Mendengarkan radio, mengobrol',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Berjalan-jalan, olah raga, hiking',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kalau kamu marah, biasanya paling terlihat dari',
                        'answers' => array(
                            array(
                                'description' => 'Ekspresi wajah',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Intonasi suara',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Gerak tubuh',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Biasanya pada saat kamu tidak ada kegiatan',
                        'answers' => array(
                            array(
                                'description' => 'Melamun, menatap ke angkasa',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Bebicara dengan diri sendiri',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Gelisah tak bisa duduk tenang',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Pilih kegiatan yang kamu merasa nyaman melakukannya',
                        'answers' => array(
                            array(
                                'description' => 'Menulis, menggambar, Mendesain',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Berdebat, bercerita dan bermain musik',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Menari , berolahraga, membuat kerajinan tangan',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kata-kata khas kamu saat berbicara',
                        'answers' => array(
                            array(
                                'description' => '"Lihat baik-baik…"',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => '"Dengarkan baik-baik…"',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => '"Rasakan baik-baik…"',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mana yang paling sering terjadi saat di sekolah',
                        'answers' => array(
                            array(
                                'description' => 'Kamu memperhatikan wajah guru saat beliau berbicara/menerangkan',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kamu mendengarkan saja waktu guru menerangkan',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Saat guru menerangkan, tangan kamu tidak bisa diam, memain-mainkan ballpoint',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                )
            )
        );

        $testModel = Test::model()->find(array('order' => 'id DESC'));
        $startTest = 1;
        if (!empty($testModel)) {
            $startTest = $startTest + $testModel->id;
        }

        $questionModel = Question::model()->find(array('order' => 'id DESC'));
        $startQuestion = 1;
        if (!empty($questionModel)) {
            $startQuestion = $startQuestion + $questionModel->id;
        }

        foreach ($row as $column) {
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['created_by'] = $user->id;

            $questions = $column['questions'];
            unset($column['questions']);
            $this->insert('tests', $column);
            foreach ($questions as $id => $question) {
                $question['test_id'] = $startTest;
                $question['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
                $question['created_at'] = date('Y-m-d H:i:s');
                $question['created_by'] = $user->id;

                $answers = $question['answers'];
                unset($question['answers']);
                $this->insert('questions', $question);
                foreach ($answers as $answer) {
                    $answer['question_id'] = $id + $startQuestion;
                    $answer['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
                    $answer['created_at'] = date('Y-m-d H:i:s');
                    $answer['created_by'] = $user->id;
                    $this->insert('answers', $answer);
                }
            }
        }
    }

    public function down() {
        $testSlug = Test::model()->slugify('Modalitas Belajar Paket 1');
        $testModel = Test::model()->findBySlug($testSlug);
        Test::model()->deleteWithQuestionAndAnswer($testModel->id);
    }

}
