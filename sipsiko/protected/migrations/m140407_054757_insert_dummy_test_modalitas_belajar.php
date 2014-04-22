<?php

class m140407_054757_insert_dummy_test_modalitas_belajar extends CDbMigration {

    public function up() {
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
                'slug' => Test::model()->slugify('Modalitas Belajar'),
                'name' => 'Modalitas Belajar',
                'description' => 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).',
                'is_expert' => true,
                'is_public' => false,
                'show_result' => true,
                'combination_variable' => 1,
                'user_profile_id' => 2,
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
                    array(
                        'description' => 'Kamu lebih gampang mengingat sesuatu kalau kamu menuliskannya',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Waktu guru menerangkan pelajaran di depan kelas, susah sekali buat kamu untuk mengerti',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Bagian kosong buku catatan suka kamu gambari atau tulisi saat guru menerangkan',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu tidak bisa belajar kalau ada keributan atau musik terdengar oleh mu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Di tempat sepi biasanya kamu bisa konsentrasi dengan baik',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu lebih senang jika sesuatu berwarna',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu seringkali "telat" kalau ada yang melontarkan "joke"',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Sewaktu ulangan, kamu membayangkan buku catatan kamu dalam pikiran',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Saat guru menerangkan, kamu merasa lebih bisa berkonsentrasi kalau menatap wajahnya',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu menuliskan instruksi yang kamu dapat, tidak hanya mendengarnya saja',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Catatan-catatan kamu berantakan sekali, tidak teratur',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mata kamu gampang capek walau kamu tidak pakai kacamata',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu tidak begitu mahir mengartikan bahasa tubuh seseorang',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu seringkali salah membaca suatu kata',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Lebih baik kamu disuruh mendengarkan guru menerangkan daripada disuruh membaca buku sendiri',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu sangat mudah mengingat sesuatu yang dikatakan oleh orang',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu paling tidak suka jika mendapat tugas menulis essay atau laporan, lebih baik ditanya secara lisan',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu kesulitan membaca tulisan yang kecil-kecil, walau mata kamu sehat',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Instruksi/petunjuk tertulis membuat kamu bingung',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Membaca membuat tangan kamu pegal karena harus menunjuk tiap kata yang sedang dibaca, kalau tidak, melantur kemana-mana',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Teman-teman kamu tidak mengerti kalau kamu memberi instruksi',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Waktu yang kamu butuhkan untuk mengerjakan tugas cukup lama, karena kamu harus berjalan ke sana kemari, beristirahat sebentar, atau mengerjakan hal lain, untuk mendapatkan ide lebih lanjut',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Duduk terlalu lama menyiksa kamu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Daripada memikirkannya matang-matang, kamu memilih "trial-error" kalau menghadapi suatu masalah',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Biasanya kamu langsung mengerjakan sesuatu tanpa harus melihat instruksinya terlebih dahulu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang berolah raga dan cukup mahir pada beberapa cabang olah raga',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Teman kamu bilang "Repot sekali melihat kamu menerangkan sesuatu, tangan kamu tidak bisa diam. Pasti ikut menerangkan juga"',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu melihat sesuatu yang sudah jadi, kemudian kamu suka membuatnya sendiri',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang membaca buku pelajaran sambil naik sepeda statis/olahraga ditempat lainnya',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Agar kamu dapat mengerti pelajaran, kamu suka menulis ulang atau mengetik catatan pelajaran kamu',
                        'answers' => array(
                            array(
                                'description' => 'Hampir selalu',
                                'value' => 3,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang',
                                'value' => 2,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Jarang sekali',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu lebih baik disuruh menggambarkan peta daripada menerangkan arah jalan kepada seseorang',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat/pernah memainkan suatu alat musik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat menghubungkan musik dengan perasaanmu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu bisa menjumlah atau mengalikan dengan cepat diluar kepala',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang bekerja dengan komputer atau kalkulator',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Belajar langkah baru dalam suatu tarian/gerakan dansa, mudah buat kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk mengungkapkan pendapat kamu dalam suatu debat',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang mengikuti ceramah atau seminar',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Dimanapun kamu berada, kamu tahu arah mata angin',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Hidupmu rasanya hampa tanpa musik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu selalu mengerti instruksi-instruksi dalam buku manual suatu barang',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Puzzle dan Games sangat kamu sukai',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk belajar mengendarai motor/mobil',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu merasa terpancing saat mendengar ada orang yang berbicara tapi pembicaraannya terdengar tidak logis',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Koordinasi tubuh dan keseimbangan kamu cukup baik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu merasa lebih cepat dari orang lain saat melihat pola atau hubungan antara suatu angka',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu menyukai kegiatan membuat model atau membuat patung',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk menangkap inti suatu pembicaraan/kalimat',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat dengan mudah membayangkan suatu objek dalam berbagai posisi',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Seringkali kamu menjadikan suatu lagu sebagai "soundtrack" suatu kejadian dalam hidup kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu suka bekerja dengan angka-angka dan bentuk',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Menyenangkan buat kamu untuk memperhatikan bentuk-bentuk gedung/rumah',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Diwaktu kamu sendiri atau di kamar mandi, kamu senang bersenandung atau bersiul',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup baik di salah satu cabang olahraga',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu berminat untuk belajar struktur bahasa',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Biasanya kamu cukup sadar terhadap ekspresi wajah kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perubahan ekspresi tubuh orang lain',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perasaan-perasaan kamu dan mudah untuk membedakannya',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perasaan orang lain',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka tentang pandangan orang terhadap kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
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
            $column['status'] = Status::ACTIVE;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $questions = $column['questions'];
            unset($column['questions']);
            $this->insert('tests', $column);
            foreach ($questions as $id => $question) {
                $question['test_id'] = $startTest;
                $question['status'] = Status::ACTIVE;
                $question['created_at'] = date('Y-m-d H:i:s');
                $question['updated_at'] = date('Y-m-d H:i:s');

                $answers = $question['answers'];
                unset($question['answers']);
                $this->insert('questions', $question);
                foreach ($answers as $answer) {
                    $answer['question_id'] = $id + $startQuestion;
                    $answer['status'] = Status::ACTIVE;
                    $answer['created_at'] = date('Y-m-d H:i:s');
                    $answer['updated_at'] = date('Y-m-d H:i:s');
                    $this->insert('answers', $answer);
                }
            }
        }
    }

    public function down() {
        $testSlug = Test::model()->slugify('Modalitas Belajar');
        $testModel = Test::model()->findBySlug($testSlug);
        Test::model()->deleteWithQuestionAndAnswer($testModel->id);
    }

}
