<?php

class m140407_054757_insert_dummy_test_modalitas_belajar extends CDbMigration {

    public function up() {
        $row = array(
            /**
             * 44 - Visual
             * 45 - Auditory
             * 46 - Kinesthetic
             */
            array(
                'slug' => Test::model()->slugify('Modalitas Belajar'),
                'name' => 'Modalitas Belajar',
                'is_expert' => true,
                'is_public' => true,
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
                                'description' => 'Menghafal materi ulangan sambil mengucapkannya keras-keras',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Membolak-balik buku membaca materi ulangan',
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
                                'description' => 'Membaca sambil menggerakkan bibir dan mengucapkannya',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Membacanya dengan tenang, cepat dan tekun',
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
                                'description' => 'Berbicara dengan kecepatan sedang',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Berbicara dengan cepat',
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
                                'description' => 'Mendengarkan radio, mengobrol',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Menonton televisi, membaca, mengisi TTS',
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
                                'description' => 'Intonasi suara',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Ekspresi wajah',
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
                                'description' => 'Bebicara dengan diri sendiri',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Melamun, menatap ke angkasa',
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
                                'description' => 'Berdebat, bercerita dan bermain musik',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Menulis, menggambar, Mendesain',
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
                                'description' => '"Dengarkan baik-baik…"',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => '"Lihat baik-baik…"',
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
                                'description' => 'Kamu mendengarkan saja waktu guru menerangkan',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Kamu memperhatikan wajah guru saat beliau berbicara/menerangkan',
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
                    array(
                        'description' => 'Kamu lebih gampang mengingat sesuatu kalau kamu menuliskannya',
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
                        'description' => 'Waktu guru menerangkan pelajaran di depan kelas, susah sekali buat kamu untuk mengerti',
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
                        'description' => 'Bagian kosong buku catatan suka kamu gambari atau tulisi saat guru menerangkan',
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
                        'description' => 'Kamu tidak bisa belajar kalau ada keributan atau musik terdengar oleh mu',
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
                        'description' => 'Di tempat sepi biasanya kamu bisa konsentrasi dengan baik',
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
                        'description' => 'Kamu lebih senang jika sesuatu berwarna',
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
                        'description' => 'Kamu seringkali "telat" kalau ada yang melontarkan "joke"',
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
                        'description' => 'Sewaktu ulangan, kamu membayangkan buku catatan kamu dalam pikiran',
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
                        'description' => 'Saat guru menerangkan, kamu merasa lebih bisa berkonsentrasi kalau menatap wajahnya',
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
                        'description' => 'Kamu menuliskan instruksi yang kamu dapat, tidak hanya mendengarnya saja',
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
                        'description' => 'Catatan-catatan kamu berantakan sekali, tidak teratur',
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
                        'description' => 'Mata kamu gampang capek walau kamu tidak pakai kacamata',
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
                        'description' => 'Kamu tidak begitu mahir mengartikan bahasa tubuh seseorang',
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
                        'description' => 'Kamu seringkali salah membaca suatu kata',
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
                        'description' => 'Lebih baik kamu disuruh mendengarkan guru menerangkan daripada disuruh membaca buku sendiri',
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
                        'description' => 'Kamu sangat mudah mengingat sesuatu yang dikatakan oleh orang',
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
                        'description' => 'Kamu paling tidak suka jika mendapat tugas menulis essay atau laporan, lebih baik ditanya secara lisan',
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
                        'description' => 'Kamu kesulitan membaca tulisan yang kecil-kecil, walau mata kamu sehat',
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
                        'description' => 'Instruksi/petunjuk tertulis membuat kamu bingung',
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
                        'description' => 'Membaca membuat tangan kamu pegal karena harus menunjuk tiap kata yang sedang dibaca, kalau tidak, melantur kemana-mana',
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
                    array(
                        'description' => 'Kamu lebih baik disuruh menggambarkan peta daripada menerangkan arah jalan kepada seseorang',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat/pernah memainkan suatu alat musik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat menghubungkan musik dengan perasaanmu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu bisa menjumlah atau mengalikan dengan cepat diluar kepala',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang bekerja dengan komputer atau kalkulator',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Belajar langkah baru dalam suatu tarian/gerakan dansa, mudah buat kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk mengungkapkan pendapat kamu dalam suatu debat',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang mengikuti ceramah atau seminar',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Dimanapun kamu berada, kamu tahu arah mata angin',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Hidupmu rasanya hampa tanpa musik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu selalu mengerti instruksi-instruksi dalam buku manual suatu barang',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Puzzle dan Games sangat kamu sukai',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk belajar mengendarai motor/mobil',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu merasa terpancing saat mendengar ada orang yang berbicara tapi pembicaraannya terdengar tidak logis',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Koordinasi tubuh dan keseimbangan kamu cukup baik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu merasa lebih cepat dari orang lain saat melihat pola atau hubungan antara suatu angka',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu menyukai kegiatan membuat model atau membuat patung',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk menangkap inti suatu pembicaraan/kalimat',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat dengan mudah membayangkan suatu objek dalam berbagai posisi',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Seringkali kamu menjadikan suatu lagu sebagai "soundtrack" suatu kejadian dalam hidup kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu suka bekerja dengan angka-angka dan bentuk',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Menyenangkan buat kamu untuk memperhatikan bentuk-bentuk gedung/rumah',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 45
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 45
                            ),
                        )
                    ),
                    array(
                        'description' => 'Diwaktu kamu sendiri atau di kamar mandi, kamu senang bersenandung atau bersiul',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup baik di salah satu cabang olahraga',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu berminat untuk belajar struktur bahasa',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 44
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 44
                            ),
                        )
                    ),
                    array(
                        'description' => 'Biasanya kamu cukup sadar terhadap ekspresi wajah kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perubahan ekspresi tubuh orang lain',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perasaan-perasaan kamu dan mudah untuk membedakannya',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perasaan orang lain',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => 46
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka tentang pandangan orang terhadap kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => 46
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
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
                $question['test_id'] = 1;
                $question['status'] = Status::ACTIVE;
                $question['created_at'] = date('Y-m-d H:i:s');
                $question['updated_at'] = date('Y-m-d H:i:s');

                $answers = $question['answers'];
                unset($question['answers']);
                $this->insert('questions', $question);
                foreach ($answers as $answer) {
                    $answer['question_id'] = $id + 1;
                    $answer['status'] = Status::ACTIVE;
                    $answer['created_at'] = date('Y-m-d H:i:s');
                    $answer['updated_at'] = date('Y-m-d H:i:s');
                    $this->insert('answers', $answer);
                }
            }
        }
    }

    public function down() {
        $this->truncate('tests');
        $this->truncate('questions');
        $this->truncate('answers');
    }

}
