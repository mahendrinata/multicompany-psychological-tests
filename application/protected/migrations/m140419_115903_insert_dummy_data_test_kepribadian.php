<?php

class m140419_115903_insert_dummy_data_test_kepribadian extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::slugify('Kepribadian');
        $typeModel = Type::model()->findBySlug($slug);

        $sanguinisSlug = Variable::slugify('Sanguinis');
        $sanguinisModel = Variable::model()->findBySlug($slug . '-' . $sanguinisSlug);

        $kolerisSlug = Variable::slugify('Koleris');
        $kolerisModel = Variable::model()->findBySlug($slug . '-' . $kolerisSlug);

        $melankolisSlug = Variable::slugify('Melankolis');
        $melankolisModel = Variable::model()->findBySlug($slug . '-' . $melankolisSlug);

        $plegmatisSlug = Variable::slugify('Plegmatis');
        $plegmatisModel = Variable::model()->findBySlug($slug . '-' . $plegmatisSlug);
        $row = array(
            /**
             * $sanguinisModel->id - Sanguinis
             * $kolerisModel->id - Koleris
             * $melankolisModel->id - Melankolis
             * $plegmatisModel->id - Plegmatis
             */
            array(
                'slug' => Test::slugify('Kepribadian (Sanguinis, Koleris, Melankolis dan Plegmatis)'),
                'name' => 'Kepribadian (Sanguinis, Koleris, Melankolis dan Plegmatis)',
                'description' => 'Tes Kepribadian digunakan untuk menentukan kepribadian seseorang.',
                'publication_id' => Test::model()->getPublicationIdBySlug(Test::STATUS_PRIVATE),
                'show_result' => true,
                'combination_variable' => 1,
                'expert_id' => 1,
                'type_id' => $typeModel->id,
                'questions' => array(
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Suka pamer, memperlihatkan apa yang gemerlap dan kuat, terlalu bersuara',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Suka memerintah, mendominasi, kadang-kadang mengesalkan antar hubungan orang dewasa',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Menghindari perhatian akibat rasa malu',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Memperlihatkan sedikit emosi/mimik',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Kurang teratur, sehingga mempengaruhi hampir semua bidang kehidupannya',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Merasa sulit mengenali masalah dan perasaan orang lain',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Sulit memaafkan dan melupakan sakit hati yang pernah dilakukan, biasa mendendam',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Cenderung tidak bergairah, sering merasa bahwa bagaimanapun sesuatu tidak akan berhasil',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Suka menceritakan kembali suatu kisah tanpa menyadari bahwa cerita tersebut pernah diceritakan sebelumnya, selalu perlu sesuatu untuk dikatakan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Berjuang, melawan untuk menerima cara lain yang tidak sesuai dengan cara yang diinginkan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Sering memendam rasa tidak senang akibat merasa tersinggung oleh sesuatu',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tidak bersedia ikut terlibat terutama bila rumit',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Punya ingatan kurang kuat, biasanya berkaitan dengan kurang disiplin dan tidak mau repot-repot mencatat hal-hal yang tidak menyenangkan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Langsung, blak-blakan, tidak sungkan mengatakan apa yang dipikirkan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Bersikeras tentang persoalan sepele, minta perhatian besar pada persoalan yang tidak penting',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Sering merasa sangat khawatir, sedih, dan gelisah',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Lebih banyak bicara daripada mendengarkan, bila sudah bicara sulit berhenti',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Sulit bertahan untuk menghadapi kekesalan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Kurang percaya diri',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Sulit dalam membuat keputusan',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Bisa bergairah sesaat dan sedih pada saat berikutnya. Bersedia membantu kemudian menghilang. Berjanji akan datang tapi kemudian lupa untuk muncul',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Merasa sulit memperlihatkan kasih sayang dengan terbuka',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Tuntutannya akan kesempurnaan terlalu tinggi dan dapat membuat orang lain menjauhinya',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tidak tertarik pada perkumpulan atau kelompok',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Tidak punya cara yang konsisten untuk melakukan banyak hal',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Bersikeras memaksakan caranya sendiri',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Standar yang ditetapkan begitu tinggi sehingga orang lain sulit memuaskannya',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Lambat dalam bergerak dan sulit untuk ikut terlibat',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Memperbolehkan orang lain, termasuk anak-anak untuk melakukan apa saja sesukanya untuk menghindari diri kita tidak disukai',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Punya harga diri tinggi dan menganggap diri selalu benar dan yang terbaik dalam pekerjaan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Dalam mengharapkan yang terbaik, biasanya melihat sisi buruk sesuatu terlebih dahulu',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Memiliki kepribadian yang biasa saja dan tidak suka memperlihatkan banyak emosi',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Memiliki perangai seperti anak-anak yang mengutarakan diri dengan ngambek dan berbuat berlebihan tetapi kemudian melupakannya seketika',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => ' Mengobarkan perdebatan karena biasanya selalu benar dan terkadang tidak peduli bagaimana situasi saat itu',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Mudah merasa terasing dari orang lain dikarenakan rasa tidak aman atau takut jangan-jangan orang lain tidak merasa senang bersamanya',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Bukan orang yang suka menetapkan tujuan dan tidak berharap menjadi orang yang seperti itu',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Memiliki perspektif yang sederhana dan kekanak-kanakan, kurang pengertian terhadap tingkat kehidupan yang lebih mendalam',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Penuh keyakinan, semangat, dan keberanian (sering dalam pengertian negatif)',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Sikapnya jarang positif dan sering hanya melihat sisi buruk dari setiap situasi',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Mudah bergaul, tidak peduli, dan masa bodoh',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Merasa senang mendapat penghargaan dari orang lain. Sebagai penghibur menyukai tepuk tangan, tawa, dan penerimaan penonton',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Menetapkan tujuan secara agresif serta harus terus produktif, merasa bersalah bila beristirahat, bukan terdorong oleh keinginan untuk sempurna melainkan imbalan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Suka menarik diri dan memerlukan banyak waktu untuk sendirian atau mengasingkan diri',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Secara konsisten merasa terganggu atau resah',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Suka berbicara dan sulit mendengarkan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Kadang-kadang menyatakan diri dengan cara yang agak menyinggung perasaan dan kurang pertimbangan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Terlalu introspektif dan mudah tersinggung kalau disalahpahami',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Lebih suka mundur dari situasi sulit',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Kurang memiliki kemampuan dalam membuat kehidupan menjadi teratur',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Dengan paksa mengambil kontrol atas situasi atau orang lain, biasanya dengan mengatakan apa yang harus dilakukan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Hampir sepanjang waktu merasa tertekan',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Mempunyai ciri khas selalu tidak tetap dan kurang keyakinan bahwa suatu hal akan berhasil',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Tidak menentu, serba berlawanan dengan tindakan dan emosi yang tidak berdasarkan logika',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Tampaknya tidak bisa menerima sikap, pandangan, dan cara orang lain',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Pemikiran dan perhatian ditujukan ke dalam, hidup di dalam diri sendiri',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Merasa bahwa kebanyakan hal tidak penting dalam suatu cara atau cara yang lain',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Hidup dalam keadaan tidak teratur, tidak dapat menemukan banyak benda',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Mempengaruhi dengan cerdik dan penuh tipu untuk kepentingan sendiri; dengan suatu cara dapat memaksakan kehendak',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Tidak punya emosi yang tinggi, tetapi biasanya semangatnya merosot sekali, apalagi bila merasa tidak dihargai',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Bicara pelan kalau didesak, tidak mau repot-repot bicara dengan jelas',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Perlu menjadi pusat perhatian, ingin dilihat',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Bertekad memaksakan kehendaknya, tidak mudah dibujuk, keras kepala',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Tidak mudah percaya, mempertanyakan motif di balik suatu perkataan',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tidak sering bertindak atau berpikir cepat, sangat mengganggu',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Tawa dan suaranya dapat didengar di atas suara lainnya di di dalam ruangan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Tidak ragu-ragu mengatakan benar dan dapat memegang kendali',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Memerlukan banyak waktu pribadi dan cenderung menghindari orang lain',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Menilai pekerjaan dan kegiatan dengan ukuran berapa banyak tenaga yang dibutuhkan',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Tidak punya kekuatan untuk berkonsentrasi atau menaruh perhatian pada sesuatu',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Punya kemarahan yang menuntut berdasarkan ketidaksabaran. Kemarahan yang dinyatakan saat orang lain tak bergerak cukup cepat atau tidak menyelesaikan apa yang diperintahkan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Cenderung mencurigai atau tidak mempercayai gagasan orang lain',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Lambat untuk memulai, perlu dorongan yang kuat untuk termotivasi',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Menyukai kegiatan baru terus-menerus karena tidak merasa senang melakukan hal yang sama sepanjang waktu',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Bisa bertindak tergesa-gesa tanpa memikirkan dengan tuntas terlebih dahulu, biasanya karena ketidaksabaran',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Secara sadar maupun tidak mendendam, menghukum orang yang melanggar, diam-diam menahan persahabatan/kasih sayang',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tidak bersedia untuk ikut terlibat dalam suatu hal',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kelemahan',
                        'answers' => array(
                            array(
                                'description' => 'Rentang perhatian kekanak-kanakan dan pendek, butuh banyak perubahan dan variasi supaya tak merasa bosan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Cerdik, orang yang selalu bisa menemukan cara untuk mencapai tujuan yang diinginkan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Selalu mengevaluasi dan membuat penilaian, sering memikirkan dan menyatakan reaksi negatif',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Sering mengendurkan pendiriannya, bahkan ketika merasa benar untuk menghindari terjadinya konflik',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Penuh kehidupan, sering menggunakan isyarat tangan, lengan, dan wajah secara hidup',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Orang yang mau melakukan sesuatu hal yang baru dan berani bertekad untuk menguasainya',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Suka menyelidiki bagian-bagian yang logis',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Mudah menyesuaikan diri dan senang dalam setiap situasi',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Penuh kesenangan dan selera humor yang baik',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Meyakinkan seseorang dengan logika dan fakta, bukan dengan pesona atau kekuasaan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Melakukan sesuatu sampai selesai sebelum memulai yang lain',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tampak tidak terganggu dan tenang serta menghindari setiap bentuk kekacauan',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Orang yang memandang bersama orang lain sebagai kesempatan untuk bersikap manis dan menghibur, bukannya sebagai tantangan atau kesempatan bisnis',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Orang yang yakin dengan caranya sendiri',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Bersedia mengorbankan dirinya untuk memenuhi kebutuhan orang lain',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Dengan mudah menerima pandangan atau keinginan orang lain tanpa perlu banyak mengungkapkan pendapat sendiri',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Bisa merebut hati orang lain melalui pesona kepribadian',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Mengubah setiap situasi, kejadian atau permainan sebagai sebuah kontes dan selalu bermain untuk menang',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Menghargai keperluan dan perasaan orang lain',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Mempunyai perasaan emosional tapi jarang memperlihatkannya',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Memperbaharui dan membantu membuat orang lain merasa senang',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Bisa bertindak cepat dan efektif dalam semua situasi',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Memperlakukan orang lain dengan segan sebagai penghormatan dan penghargaan',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Menahan diri dalam menunjukkan emosi atau antusiasme',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Penuh gairah dalam kehidupan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Orang mandiri yang bisa sepenuhnya mengandalkan kemampuan dan sumber dayanya sendiri',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Secara intensif memperhatikan orang lain maupun hal apapun yang terjadi di sekitar',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Orang yang mudah menerima keadaan atau situasi apa saja',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Dapat mendorong atau memaksa orang lain mengikuti dan bergabung melalui pesona kepribadiannya',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Mengetahui segalanya akan beres bila kita yang memimpin',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Memilih mempersiapkan aturan yang terinci sebelumnya dalam menyelesaikan suatu proyek dan lebih menyukai keterlibatan dalam tahap-tahap perencanaan dan produk jadi, bukan dalam melaksanakan tugas',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tidak terpengaruh oleh penundaan. Tetap tenang dan toleran',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Memilih agar semua kehidupan adalah kegiatan yang impulsif, tidak dipikirkan terlebih dahulu dan tidak terhambat oleh rencana',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Yakin, tidak ragu-ragu',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Membuat dan menghayati hidup menurut rencana sehari-hari. Tidak menyukai bila rencananya terganggu',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Pendiam, tidak mudah terseret dalam percakapan',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Orang yang periang dan dapat meyakinkan diri sendiri dan orang lain bahwa semuanya akan beres',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Bicara terang-terangan dan terkadang tidak menahan diri',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Orang yang mengatur segala-galanya secara sistematis dan metodis',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Bisa menerima apa saja, cepat melakukan sesuatu bahkan dengan cara orang lain',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Punya rasa humor yang cemerlang dan bisa membuat cerita apa saja menjadi peristiwa yang menyenangkan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Pribadi yang mendominasi dan mampu menyebabkan orang lain ragu-ragu untuk melawannya',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Secara konsisten dapat diandalkan, teguh, setia, dan mengabdi, bahkan terkadang tanpa alasan',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Orang yang menanggapi. Bukan orang yang punya inisiatif untuk memulai percakapan',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Orang yang menyenangkan sebagai teman',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Bersedia mengambil resiko tanpa kenal takut',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Melakukan segala sesuatu secara berurutan dengan ingatan yang jernih akan segala hal yang terjadi',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Berurusan dengan orang lain secara penuh siasat, perasa, dan sabar',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Secara konsisten memiliki semangat yang tinggi dan suka membagikan kebahagiaan kepada orang lain',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Percaya diri dan yakin akan kemampuan dan kesuksesannya sendiri',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Orang yang perhatiannya melibatkan sesuatu yang berhubungan dengan intelektual dan artistik',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tetap memiliki keseimbangan secara emosional, menanggapi sebagaimana yang diharapkan orang lain',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Mendorong orang lain untuk bekerja dan terlibat serta membuat seluruhnya menyenangkan',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Memenuhi diri sendiri, mandiri, penuh percaya diri dan nampak tidak begitu memerlukan bantuan',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Memvisualisasikan hal-hal dalam bentuk yang sempurna dan perlu memenuhi standar itu sendiri',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Tidak pernah mengatakan atau menyebabkan apapun yang tidak menyenangkan atau menimbulkan rasa keberata',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Terang-terangan menyatakan emosi terutama rasa sayang dan tidak ragu menyentuh ketika berbicara dengan orang lain',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Orang yang mempunyai kemampuan membuat penilaian yang cepat dan tuntas',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Intensif dan introspektif tanpa rasa senang pada percakapan dan pengajaran yang pulasan',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Memperlihatkan ‘kepandaian bicara yang mengigit’. Biasanya kalimat satu baris yang sifatnya sarkastik',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Menyukai pesta dan tidak bisa menunggu untuk bertemu setiap orang dalam ruangan, tidak pernah menganggap orang lain asing',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Terdorong oleh keperluan untuk produktif, pemimpin yang dituruti orang lain',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Punya apresiasi mendalam untuk musik, punya komitmen kepada musik sebagai bentuk seni, bukan hanya kesenangan pertunjukan',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Secara konsisten mencari peranan merukunkan pertikaian supaya bisa menghindari konflik',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Terus-menerus berbicara, biasanya menceritakan kisah lucu yang dapat menghibur setiap orang di sekitarnya, merasa perlu mengisi kesunyian agar orang lain merasa senang',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Memegang teguh dengan keras kepala dan tidak mau melepaskan hingga tujuan tercapai',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Orang yang tanggap dan mengingat setiap kesempatan istimewa, cepat memberi isyarat yang baik',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Mudah menerima pemikiran dan cara orang lain tanpa perlu tidak menyetujuinya',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Penuh kehidupan, kuat, dan penuh semangat',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Pemberi pengarahan karena pembawaan yang terdorong untuk memimpin dan sering merasa sulit mempercayai bahwa orang lain bisa melakukan pekerjaan dengan sama baiknya',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Setia pada seseorang, gagasan, dan pekerjaan, terkadang dapat melampaui alasan',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Selalu bersedia mendengarkan apa yang orang lain katakan',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Tak ternilai harganya, dicintai, pusat perhatian',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Memegang kepemimpinan dan mengharapkan orang lain mengikuti',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Mengatur kehidupan, tugas, dan pemecahan masalah dengan membuat daftar',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Mudah puas dengan apa yang dimiliki, jarang iri hati',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Orang yang suka menghidupkan pesta sebagai diinginkan orang sebagai tamu pesta',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Harus terus-menerus bekerja atau mencapai sesuatu, sering merasa sulit beristirahat',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Menempatkan standar tinggi pada dirinya maupun orang lain. Menginginkan segala-galanya pada urutan semestinya sepanjang waktu',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Mudah bergaul, bersifat terbuka, mudah diajak bicara',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kekuatan',
                        'answers' => array(
                            array(
                                'description' => 'Kepribadian yang hidup, berlebihan, penuh tenaga',
                                'value' => 1,
                                'variable_id' => $sanguinisModel->id
                            ),
                            array(
                                'description' => 'Tidak kenal takut, berani, terus terang, tidak takut akan resiko',
                                'value' => 1,
                                'variable_id' => $kolerisModel->id
                            ),
                            array(
                                'description' => 'Secara konsisten ingin membawa diri di dalam batas-batas apa yang dirasakan semestinya',
                                'value' => 1,
                                'variable_id' => $melankolisModel->id
                            ),
                            array(
                                'description' => 'Kepribadian yang stabil dan berada di tengah-tengah',
                                'value' => 1,
                                'variable_id' => $plegmatisModel->id
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
        $testSlug = Test::slugify('Kepribadian (Sanguinis, Koleris, Melankolis dan Plegmatis)');
        $testModel = Test::model()->findBySlug($testSlug);
        Test::model()->deleteWithQuestionAndAnswer($testModel->id);
    }

}
