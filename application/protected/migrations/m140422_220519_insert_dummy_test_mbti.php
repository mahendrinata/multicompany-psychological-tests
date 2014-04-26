<?php

class m140422_220519_insert_dummy_test_mbti extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::slugify('mbti');
        $typeModel = Type::model()->findBySlug($slug);

        $extrovertSlug = Variable::slugify('Extrovert');
        $extrovertModel = Variable::model()->findBySlug($slug . '-' . $extrovertSlug);

        $introvertSlug = Variable::slugify('Introvert');
        $introvertModel = Variable::model()->findBySlug($slug . '-' . $introvertSlug);

        $sensingSlug = Variable::slugify('Sensing');
        $sensingModel = Variable::model()->findBySlug($slug . '-' . $sensingSlug);

        $intuitiveSlug = Variable::slugify('Intuitive');
        $intuitiveModel = Variable::model()->findBySlug($slug . '-' . $intuitiveSlug);

        $thingkingSlug = Variable::slugify('Thinking');
        $thingkingModel = Variable::model()->findBySlug($slug . '-' . $thingkingSlug);

        $feelingSlug = Variable::slugify('Feeling');
        $feelingModel = Variable::model()->findBySlug($slug . '-' . $feelingSlug);

        $judgingSlug = Variable::slugify('Judging');
        $judgingModel = Variable::model()->findBySlug($slug . '-' . $judgingSlug);

        $perceivingSlug = Variable::slugify('Perceiving');
        $perceivingModel = Variable::model()->findBySlug($slug . '-' . $perceivingSlug);
        $row = array(
            array(
                'slug' => Test::slugify('MBTI Nafis Mudrika'),
                'name' => 'MBTI Nafis Mudrika',
                'description' => 'MBTI sangat berguna di dunia pendidikan dan pengembangan karier. MBTI bisa digunakan sebagai  panduan  untuk  memilih  jurusan  kuliah  sampai dengan  profesi  yang  cocok  dengan kepribadian.',
                'publication_id' => Test::model()->getPublicationIdBySlug(Test::STATUS_PRIVATE),
                'show_result' => true,
                'combination_variable' => 1,
                'expert_id' => 1,
                'type_id' => $typeModel->id,
                'questions' => array(
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Spontan, Fleksibel, tidak diikat waktu',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Terencana dan memiliki deadline jelas',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Lebih memilih berkomunikasi dengan menulis',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Lebih memilih berkomunikasi dengan bicara',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Tidak menyukai hal-hal yang bersifat mendadak dan di luar perencanaan',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                            array(
                                'description' => 'Perubahan mendadak tidak jadi masalah',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Obyektif',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Subyektif',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Menemukan dan mengembangkan ide dengan mendiskusikannya',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                            array(
                                'description' => 'Menemukan dan mengembangkan ide dengan merenungkan',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Bergerak dari gambaran umum baru ke detail',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                            array(
                                'description' => 'Bergerak dari detail ke gambaran umum sebagai kesimpulan akhir',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Berorientasi pada dunia eksternal (kegiatan, orang)',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                            array(
                                'description' => 'Berorientasi pada dunia internal (memori, pemikiran, ide)',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Berbicara mengenai masalah yang dihadapi hari ini dan langkah-langkah praktis mengatasinya',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Berbicara mengenai visi masa depan dan konsep-konsep mengenai visi ',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Diyakinkan dengan penjelasan yang menyentuh perasaan',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                            array(
                                'description' => 'Diyakinkan dengan penjelasan yang masuk akal',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Fokus pada sedikit hobi namun mendalam',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Fokus pada banyak hobi secara luas dan umum',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Tertutup dan mandiri',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Sosial dan ekspresif',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Aturan, jadwal dan target sangat mengikat dan membebani',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Aturan, jadwal dan target akan sangat membantu dan memperjelas tindakan',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Menggunakan pengalaman sebagai pedoman',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Menggunakan imajinasi dan perenungan sebagai pedoman',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Berorientasi tugas dan job description',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Berorientasi pada manusia dan hubungan',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Pertemuan dengan orang lain dan aktivitas sosial melelahkan',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Bertemu orang dan aktivitas sosial membuat bersemangat',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'SOP sangat membantu',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'SOP sangat membosankan',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Mengambil keputusan berdasar logika dan aturan main',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Mengambil keputusan berdasar perasaan pribadi dan kondisi orang lain',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Bebas dan dinamis',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                            array(
                                'description' => 'Prosedural dan tradisional',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Berorientasi pada hasil',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                            array(
                                'description' => 'Berorientasi pada proses',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Beraktifitas sendirian di rumah menyenangkan',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Beraktifitas sendirian di rumah membosankan',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Membiarkan orang lain bertindak bebas asalkan tujuan tercapai',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Mengatur orang lain dengan tata tertib agar tujuan tercapai',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Memilih ide inspiratif lebih penting daripada fakta',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                            array(
                                'description' => 'Memilih fakta lebih penting daripada ide inspiratif',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Mengemukakan tujuan dan sasaran lebih dahulu',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Mengemukakan kesepakatan terlebih dahulu',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Fokus pada target dan mengabaikan hal-hal baru',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                            array(
                                'description' => 'Memperhatikan hal-hal baru dan siap menyesuaikan diri serta mengubah target',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Kontinuitas dan stabilitas lebih diutamakan',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Perubahan dan variasi lebih diutamakan',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Pendirian masih bisa berubah tergantung situasi nantinya',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Berpegang teguh pada pendirian',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Bertindak step by step dengan timeframe yang jelas',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Bertindak dengan semangat tanpa menggunakan timeframe',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Berinisiatif tinggi hampir dalam berbagai hal meskipun tidak berhubungan dengan dirinya',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                            array(
                                'description' => 'Berinisiatif bila situasi memaksa atau berhubungan dengan kepentingan sendiri',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Lebih memilih tempat yang tenang dan pribadi untuk berkonsentrasi',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Lebih memilih tempat yang ramai dan banyak interaksi / aktifitas',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Menganalisa',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Berempati',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Berpikir secara matang sebelum bertindak',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Berani bertindak tanpa terlalu lama berfikir',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Menghargai seseorang karena sifat dan perilakunya',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                            array(
                                'description' => 'Menghargai seseorang karena skill dan faktor teknis',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Merasa nyaman bila situasi tetap terbuka terhadap pilihan-pilihan lain',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Merasa tenang bila semua sudah diputuskan',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Menarik kesimpulan dengan lama dan hati-hati',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'menarik kesimpulan dengan cepat sesuai naluri',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Mengekspresikan semangat',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                            array(
                                'description' => 'Menyimpan semangat dalam hati',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Mengklarifikasi ide dan teori sebelum dipraktekkan',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Memahami ide dan teori saat mempraktekkannya langsung',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Melibatkan perasaan itu tidak profesional',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Terlalu kaku pada peraturan dan pekerjaan itu kejam',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Mencari kesempatan untuk berkomunikasi secara perorangan',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Memilih berkomunikasi pada sekelompok orang',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Yang penting situasi harmonis terjaga',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                            array(
                                'description' => 'Yang penting tujuan tercapai',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Ketidakpastian itu seru, menegangkan dan membuat hati lebih senang',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Ketidakpastian membuat bingung dan meresahkan',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Berfokus pada masa kini (apa yang bisa diperbaiki sekarang)',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Berfokus pada masa depan (apa yang mungkin dicapai di masa depan)',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Mempertanyakan',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Mengakomodasi',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Secara konsisten mengamati dan mengingat detail',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Mengamati dan mengingat detail hanya bila berhubungan dengan pola',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Situasi last minute membuat bersemangat dan memunculkan potensi',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Situasi last minute sangat menyiksa, membuat stress dan merupakan kesalahan',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Lebih suka komunikasi tidak langsung (telp, surat, e-mail)',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                            array(
                                'description' => 'Lebih suka komunikasi langsung (tatap muka)',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Praktis',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Konseptual',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Perubahan adalah musuh',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                            array(
                                'description' => 'Perubahan adalah semangat hidup',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Sering dianggap keras kepala',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Sering dianggap terlalu memihak',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Bersemangat saat menolong orang keluar dari kesalahan dan meluruskan',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                            array(
                                'description' => 'Bersemangat saat mengkritik dan menemukan kesalahan',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Bertindak sesuai situasi dan kondisi yang terjadi saat itu',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Bertindak sesuai apa yang sudah direncanakan',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Menggunakan keterampilan yang sudah dikuasai',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Menyukai tantangan untuk menguasai keterampilan baru',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Membangun ide pada saat berbicara',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                            array(
                                'description' => 'Membangun ide dengan matang baru membicarakannya',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Memilih cara yang sudah ada dan sudah terbukti',
                                'value' => 1,
                                'variable_id' => $sensingModel->id
                            ),
                            array(
                                'description' => 'Memilih cara yang unik dan belum dipraktekkan orang lain',
                                'value' => 1,
                                'variable_id' => $intuitiveModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Hidup harus sudah diatur dari awal',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                            array(
                                'description' => 'Hidup seharusnya mengalir sesuai kondisi',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Standar harus ditegakkan di atas segalanya (itu menunjukkan kehormatan dan harga diri)',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Perasaan manusia lebih penting dari sekadar standar (yang adalah benda mati)',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Daftar dan checklist adalah panduan penting',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                            array(
                                'description' => 'Daftar dan checklist adalah tugas dan beban',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Menuntut perlakuan yang adil dan sama pada semua orang',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Menuntut perlakuan khusus sesuai karakteristik masing-masing orang',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Mementingkan sebab-akibat',
                                'value' => 1,
                                'variable_id' => $thingkingModel->id
                            ),
                            array(
                                'description' => 'Mementingkan nilai-nilai personal',
                                'value' => 1,
                                'variable_id' => $feelingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Puas ketika mampu beradaptasi dengan momentum yang terjadi',
                                'value' => 1,
                                'variable_id' => $perceivingModel->id
                            ),
                            array(
                                'description' => 'Puas ketika mampu menjalankan semuanya sesuai rencana',
                                'value' => 1,
                                'variable_id' => $judgingModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => '',
                        'answers' => array(
                            array(
                                'description' => 'Spontan, Easy Going, fleksibel',
                                'value' => 1,
                                'variable_id' => $extrovertModel->id
                            ),
                            array(
                                'description' => 'Berhati-hati, penuh pertimbangan, kaku',
                                'value' => 1,
                                'variable_id' => $introvertModel->id
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
        $testSlug = Test::slugify('MBTI Nafis Mudrika');
        $testModel = Test::model()->findBySlug($testSlug);
        Test::model()->deleteWithQuestionAndAnswer($testModel->id);
    }

}
