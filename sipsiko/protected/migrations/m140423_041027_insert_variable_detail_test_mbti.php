<?php

class m140423_041027_insert_variable_detail_test_mbti extends CDbMigration {

  public function up() {
    $slug = Type::model()->slugify('mbti');
    $typeModel = Type::model()->findBySlug($slug);

    $extrovertSlug = Variable::model()->slugify('Extrovert');
    $extrovertModel = Variable::model()->findBySlug($slug . '-' . $extrovertSlug);

    $introvertSlug = Variable::model()->slugify('Introvert');
    $introvertModel = Variable::model()->findBySlug($slug . '-' . $introvertSlug);

    $sensingSlug = Variable::model()->slugify('Sensing');
    $sensingModel = Variable::model()->findBySlug($slug . '-' . $sensingSlug);

    $intuitiveSlug = Variable::model()->slugify('Intuitive');
    $intuitiveModel = Variable::model()->findBySlug($slug . '-' . $intuitiveSlug);

    $thingkingSlug = Variable::model()->slugify('Thinking');
    $thingkingModel = Variable::model()->findBySlug($slug . '-' . $thingkingSlug);

    $feelingSlug = Variable::model()->slugify('Feeling');
    $feelingModel = Variable::model()->findBySlug($slug . '-' . $feelingSlug);

    $judgingSlug = Variable::model()->slugify('Judging');
    $judgingModel = Variable::model()->findBySlug($slug . '-' . $judgingSlug);

    $perceivingSlug = Variable::model()->slugify('Perceiving');
    $perceivingModel = Variable::model()->findBySlug($slug . '-' . $perceivingSlug);
    $row = array(
        array(
            'slug' => implode('-', array($introvertModel->id, $sensingModel->id, $thingkingModel->id, $judgingModel->id)),
            'shortness' => 'ISTJ',
            'name' => 'Bertanggung Jawab',
            'description' => '<ul><li>Serius, tenang, stabil & damai.</li><li>Senang pada fakta, logis, obyektif, praktis & realistis.</li><li>Task oriented, tekun, teratur, menepati janji, dapat diandalkan & bertanggung jawab.</li><li>Pendengar yang baik, setia, hanya mau berbagi dengan orang dekat.</li><li>Memegang aturan, standar & prosedur dengan teguh.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah memahami perasaan & kebutuhan orang lain.</li><li>Kurangi keinginan untuk mengontrol orang lain atau memerintah mereka untuk menegakkan aturan.</li><li>Lihatlah lebih banyak sisi positif pada orang lain atau hal lainnya.</li><li>Terbukalah terhadap perubahan.</li></ul><h5>Saran Profesi</h5><p>Bidang Manajemen, Polisi, Intelijen, Hakim, Pengacara, Dokter, Akuntan (Staf Keuangan), Programmer atau yang berhubungan dengan IT, System Analys, Pemimpin Militer</p><h5>Pasangan/Partner Alami</h5><p>ESFP atau ESTP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $judgingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $sensingModel->id, $feelingModel->id, $judgingModel->id)),
            'shortness' => 'ISFJ',
            'name' => 'Setia',
            'description' => '<ul><li>Penuh pertimbangan, hati-hati, teliti dan akurat.</li><li>Serius, tenang, stabil namun sensitif.</li><li>Ramah, perhatian pada perasaan & kebutuhan orang lain, setia, kooperatif, pendengar yang baik.</li><li>Punya kemampuan mengorganisasi, detail, teliti, sangat bertanggungjawab & bisa diandalkan.</li></ul><h5>Saran Pengembangan</h5><ul><li>Lihat lebih dalam, lebih antusias, & lebih semangat.</li><li>Belajarlah mengatakan ”tidak”. Jangan menyenangkan semua orang atau Anda dianggap plin plan.</li><li>Jangan terjebak zona nyaman dan rutinitas. Cobalah hal baru. Ada banyak hal menyenangkan yang mungkin belum pernah Anda coba.</li></ul><h5>Saran Profesi</h5><p>Architect, Interior Designer, Perawat, Administratif, Designer, Child Care, Konselor, Back Office Manager, Penjaga Toko / Perpustakaan, Dunia Perhotelan</p><h5>Pasangan/Partner Alami</h5><p>ESFP atau ESTP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $feelingModel->id,
                ),
                array(
                    'variable_id' => $judgingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $sensingModel->id, $thingkingModel->id, $perceivingModel->id)),
            'shortness' => 'ISTP',
            'name' => 'Pragmatis',
            'description' => '<ul><li>Tenang, pendiam, cenderung kaku, dingin, hati-hati, penuh pertimbangan.</li><li>Logis, rasional, kritis, obyektif, mampu mengesampingkan perasaan.</li><li>Mampu menghadapi perubahan mendadak dengan cepat dan tenang.</li><li>Percaya diri, tegas dan mampu menghadapi perbedaan maupun kritik.</li><li>Mampu menganalisa, mengorganisir, & mendelegasikan.</li><li>Problem solver yang baik terutama untuk masalah teknis & keadaan mendadak.</li></ul><h5>Saran Pengembangan</h5><ul><li>Observasilah kehidupan sosial, apa yang membuat orang marah, cinta, senang, termotivasi & terapkan pada hubungan Anda.</li><li>Belajarlah untuk mengenali perasaan Anda dan mengekspresikannya.</li><li>Jadilah orang yang lebih terbuka, keluar dari zona nyaman, eksplorasi ide baru, dan berdiskusi dengan orang lain.</li><li>Jangan mencari-cari kesalahan orang hanya untuk menyelesaikan masalahnya.</li><li>Jangan menyimpan informasi yang harusnya dibagi dan belajarlah mempercayakan tanggungjawab pada orang lain.</li></ul><h5>Saran Profesi</h5><p>Polisi, Ahli Forensik, Programmer, Ahli Komputer, System Analyst, Teknisi, Insinyur, Mekanik, Pilot, Atlit, Entrepreneur</p><h5>Pasangan/Partner Alami</h5><p>ESTJ atau ENTJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $sensingModel->id, $feelingModel->id, $perceivingModel->id)),
            'shortness' => 'ISFP',
            'name' => 'Artistik',
            'description' => '<ul><li>Berpikiran simpel & praktis, fleksibel, sensitif, ramah, tidak menonjolkan diri, rendah hati pada kemampuannya.</li><li>Menghindari konflik, tidak memaksakan pendapat atau nilai-nilainya pada orang lain.</li><li>Biasanya tidak mau memimpin tetapi menjadi pengikut dan pelaksana yang setia.</li><li>Seringkali santai menyelesaikan sesuatu, karena sangat menikmati apa yang terjadi saat ini.</li><li>Menunjukkan perhatian lebih banyak melalui tindakan dibandingkan kata-kata.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan takut pada penolakan dan konflik. Anda tidak perlu menyenangkan semua orang.</li><li>Cobalah untuk mulai memikirkan dampak jangka panjang dari keputusan-keputusan kecil di hari ini.</li><li>Asah dan kembangkan sisi kreatifitas dan seni dalam diri Anda sebagai modal bagus dalam diri Anda.</li><li>Cobalah untuk lebih terbuka dan mengekspresikan perasaan Anda.</li></ul><h5>Saran Profesi</h5><p>Seniman, Designer, Pekerja Sosial, Konselor, Psikolog, Guru, Aktor, Bidang Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ESFJ atau ENFJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $feelingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $intuitiveModel->id, $feelingModel->id, $judgingModel->id)),
            'shortness' => 'INFJ',
            'name' => 'Reflektif',
            'description' => '<ul><li>Perhatian, empati, sensitif & berkomitmen terhadap sebuah hubungan.</li><li>Sukses karena ketekunan, originalitas dan keinginan kuat untuk melakukan apa saja yang diperlukan termasuk memberikan yg terbaik dalam pekerjaan.</li><li>Idealis, perfeksionis, memegang teguh prinsip.</li><li>Visioner, penuh ide, kreatif, suka merenung dan inspiring.</li><li>Biasanya diikuti dan dihormati karena kejelasan visi serta dedikasi pada hal-hal baik.<h5>Saran Pengembangan</h5><ul><li>Seimbangkan cara pandang Anda. Jangan hanya melihat sisi negatif & resiko. Namun, lihatlah sisi positif dan peluangnya.</li><li>Bersabarlah, jangan mudah marah dan menyalahkan orang lain atau situasi.</li><li>Rileks dan jangan terus menerus berfikir atau menyelesaikan tanggungjawab.</li></ul><h5>Saran Profesi</h5><p>Pengajar, Psikolog, Dokter, Konselor, Pekerja Sosial, Fotografer, Seniman, Designer, Child Care.</p><h5>Pasangan/Partner Alami</h5><p>ESFP atau ESTP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $intuitiveModel->id,
                ),
                array(
                    'variable_id' => $feelingModel->id,
                ),
                array(
                    'variable_id' =>$judgingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $intuitiveModel->id, $thingkingModel->id, $judgingModel->id)),
            'shortness' => 'INTJ',
            'name' => 'Independen',
            'description' => '<ul><li>Visioner, punya perencanaan praktis, & biasanya memiliki ide-ide original serta dorongan kuat untuk mencapainya.</li><li>Mandiri dan percaya diri.</li><li>Punya kemampuan analisa yang bagus serta menyederhanakan sesuatu yang rumit dan abstrak menjadi sesuatu yang praktis, mudah difahami & dipraktekkan.</li><li>Skeptis, kritis, logis, menentukan (determinatif) dan kadang keras kepala.</li><li>Punya keinginan untuk berkembang serta selalu ingin lebih maju dari orang lain.</li><li>Kritik & konflik tidak menjadi masalah berarti.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah mengungkapkan emosi & perasaan Anda.</li><li>Cobalah untuk lebih terbuka pada dunia luar, banyak bergaul, banyak belajar, banyak membaca, mengunjungi banyak tempat, eksplorasi hal baru, & memperluas wawasan.</li><li>Hindari perdebatan tidak penting.</li><li>Belajarlah untuk berempati, memberi perhatian dan lebih peka terhadap orang lain.</li></ul><h5>Saran Profesi</h5><p>Peneliti, Ilmuwan, Insinyur, Teknisi, Pengajar, Profesor, Dokter, Research & Development, Business Analyst, System Analyst, Pengacara, Hakim, Programmers, Posisi Strategis dalam organisasi.</p><h5>Pasangan/Partner Alami</h5><p>ENFP atau ENTP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $intuitiveModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $judgingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $intuitiveModel->id, $feelingModel->id, $perceivingModel->id)),
            'shortness' => 'INFP',
            'name' => 'Idealis',
            'description' => '<ul><li>Sangat perhatian dan peka dengan perasaan orang lain.</li><li>Penuh dengan antusiasme dan kesetiaan, tapi biasanya hanya untuk orang dekat.</li><li>Peduli pada banyak hal. Cenderung mengambil terlalu banyak dan menyelesaikan sebagian.</li><li>Cenderung idealis dan perfeksionis.</li><li>Berpikir win-win solution, mempercayai dan mengoptimalkan orang lain.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah menghadapi kritik. Jika baik maka kritik itu bisa membangun Anda, namun jika tidak abaikan saja. Jangan ragu pula untuk bertanya dan minta saran.</li><li>Belajarlah untuk bersikap tegas. Jangan selalu berperasaan dan menyenangkan orang dengan tindakan baik. Bertindak baik itu berbeda dengan bertindak benar.</li><li>Jangan terlalu menyalahkan diri dan bersikap terlalu keras pada diri sendiri. Kegagalan adalah hal biasa dan semua orang pernah mengalaminya.</li><li>Jangan terlalu baik pada orang lain tapi melupakan diri sendiri. Anda juga punya tanggungjawab untuk berbuat baik pada diri sendiri.</li></ul><h5>Saran Profesi</h5><p>Penulis, Sastrawan, Konselor, Psikolog, Pengajar, Seniman, Rohaniawan, Bidang Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ENFJ atau ESFJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $intuitiveModel->id, $thingkingModel->id, $perceivingModel->id)),
            'shortness' => 'INTP',
            'name' => 'Konseptual',
            'description' => '<ul><li>Sangat menghargai intelektualitas dan pengetahuan. Menikmati hal-hal teoritis dan ilmiah. Senang memecahkan masalah dengan logika dan analisa.</li><li>Diam dan menahan diri. Lebih suka bekerja sendiri.</li><li>Cenderung kritis, skeptis, mudah curiga dan pesimis.</li><li>Tidak suka memimpin dan bisa menjadi pengikut yang tidak banyak menuntut.</li><li>Cenderung memiliki minat yang jelas. Membutuhkan karir dimana minatnya bisa berkembang dan bermanfaat. Jika menemukan sesuatu yang menarik minatnya, ia akan sangat serius dan antusias menekuninya.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah membangun hubungan dengan orang lain. Belajar berempati, mendengar aktif, memberi perhatian dan bertukar pendapat.</li><li>Relaks. Jangan terlalu banyak berfikir. Nikmati hidup Anda tanpa harus bertanya mengapa dan bagaimana.</li><li>Cobalah menemukan satu ide, merencanakan dan mewujudkannya. Jangan terlalu sering berganti-ganti ide tetapi tidak satupun yang terwujud.</li></ul><h5>Saran Profesi</h5><p>Ilmuwan, Fotografer, Programmer, Ahli komputer, System Analyst, Penulis Buku Teknis, Ahli Forensik, Jaksa, Pengacara, Teknisi</p><h5>Pasangan/Partner Alami</h5><p>ENTJ atau ESTJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $intuitiveModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($extrovertModel->id, $sensingModel->id, $thingkingModel->id, $perceivingModel->id)),
            'shortness' => 'ESTP',
            'name' => 'Spontan',
            'description' => '<ul><li>Spontan, Aktif, Enerjik, Cekatan, Cepat, Sigap, Antusias, Fun dan penuh variasi.</li><li>Komunikator, asertif, to the point, ceplas-ceplos, berkarisma, punya interpersonal skill yang baik.</li><li>Baik dalam pemecahan masalah langsung di tempat. Mampu menghadapi masalah, konflik dan kritik. Tidak khawatir, menikmati apapun yang terjadi.</li><li>Cenderung untuk menyukai sesuatu yang mekanistis, kegiatan bersama dan olahraga.</li><li>Mudah beradaptasi, toleran, pada umumnya konservatif tentang nilai-nilai. Tidak suka penjelasan terlalu panjang. Paling baik dalam hal-hal nyata yang dapat dilakukan.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah memahami perasaan dan pemikiran orang lain terutama saat bicara dengan mereka.</li><li>Belajarlah untuk sabar, menikmati proses, tidak semua hal bisa dicapai dengan cepat.</li><li>Sesekali luangkan waktu untuk merenung dan merencanakan masa depan Anda.</li><li>Cobalah untuk mencatat pengamatan-pengamatan Anda termasuk detailnya.</li></ul><h5>Saran Profesi</h5><p>Marketing, Sales, Polisi, Entrepreneur, Pialang Saham, Technical Support</p><h5>Pasangan/Partner Alami</h5><p>ISFJ atau ISTJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $extrovertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($extrovertModel->id, $sensingModel->id, $feelingModel->id, $perceivingModel->id)),
            'shortness' => 'ESFP',
            'name' => 'Murah Hati',
            'description' => '<ul><li>Outgoing, easygoing, mudah berteman, bersahabat, sangat sosial, ramah, hangat, & menyenangkan.</li><li>Optimis, ceria, antusias, fun, menghibur, suka menjadi perhatian.</li><li>Punya interpersonal skill yang baik, murah hati, mudah simpatik dan mengenali perasaan orang lain. Menghindari konflik dan menjaga keharmonisan suatu hubungan.</li><li>Mengetahui apa yang terjadi di sekelilingnya dan ikut serta dalam kegiatan tersebut.</li><li>Sangat baik dalam keadaan yang membutuhkan common sense, tindakan cepat dan ketrampilan praktis.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan terburu-buru dalam mengambil keputusan. Belajarlah untuk fokus dan tidak mudah berubah-ubah terutama untuk hal yang penting.</li><li>Jangan menyenangkan semua orang. Begitu pula sebaliknya, tidak semua orang bisa menyenangkan Anda.</li><li>Belajarlah menghadapi kritik dan konflik. Jangan lari.</li><li>Anda punya kecenderungan meterialistis. Hati-hati, tidak semua hal bisa diukur dengan materi ataupun uang.</li></ul><h5>Saran Profesi</h5><p>Entertainer, Seniman, Marketing, Konselor, Designer, Tour Guide, Bidang Anak-anak, Bidang Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ISTJ atau ISFJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $extrovertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $feelingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($extrovertModel->id, $intuitiveModel->id, $feelingModel->id, $perceivingModel->id)),
            'shortness' => 'ENFP',
            'name' => 'Optimis',
            'description' => '<ul><li>Ramah, hangat, enerjik, optimis, antusias, semangat tinggi, fun.</li><li>Imaginatif, penuh ide, kreatif, inovatif.</li><li>Mampu beradaptasi dengan beragam situasi dan perubahan.</li><li>Pandai berkomunikasi, senang bersosialisasi & membawa suasana positif.</li><li>Mudah membaca perasaan dan kebutuhan orang lain.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah untuk fokus, disiplin, tegas dan konsisten</li><li>Belajarlah untuk menghadapi konflik dan kritik.</li><li>Pikirkan kebutuhan diri sendiri. Jangan melupakannya karena terlalu peduli pada kebutuhan orang lain.</li><li>Jangan terlalu boros. Belajarlah untuk mengelola keuangan sedikit demi sedikit.</li><ul><h5>Saran Profesi</h5><p>Konselor, Psikolog, Entertainer, Pengajar, Motivator, Presenter, Reporter, MC, Seniman, Hospitality</p><h5>Pasangan/Partner Alami</h5><p>INTJ atau INFJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $extrovertModel->id,
                ),
                array(
                    'variable_id' => $intuitiveModel->id,
                ),
                array(
                    'variable_id' => $feelingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($introvertModel->id, $introvertModel->id, $thingkingModel->id, $perceivingModel->id)),
            'shortness' => 'ENTP',
            'name' => 'Inovatif – Kreatif',
            'description' => '<ul><li>Gesit, kreatif, inovatif, cerdik, logis, baik dalam banyak hal.</li><li>Banyak bicara dan punya kemampuan debat yang baik. Bisa berargumentasi untuk senang-senang saja tanpa merasa bersalah.</li><li>Fleksibel. Punya banyak cara untuk memecahkan masalah dan tantangan.</li><li>Kurang konsisten. Cenderung untuk melakukan hal baru yang menarik hati setelah melakukan sesuatu yang lain.</li><li>Punya keinginan kuat untuk mengembangkan diri.</li></ul><h5>Saran Pengembangan</h5><ul><li>Cobalah untuk win-win solution. Jangan ingin menang sendiri</li><li>Belajarlah untuk disiplin dan konsisten.</li><li>Hindari perdebatan tidak penting.</li><li>Belajarlah untuk sedikit waspada. Seimbangkan cara pandang Anda agar tidak terlalu optimis dan mengambil resiko yang tidak realistis.</li><li>Belajarlah untuk memberi perhatian pada perasaan orang lain.</li></ul><h5>Saran Profesi</h5><p>Pengacara, Psikolog, Konsultan, Ilmuwan, Aktor,Marketing, Programmer, Fotografer</p><h5>Pasangan/Partner Alami</h5><p>INFJ atau INTJ</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $introvertModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $perceivingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($extrovertModel->id, $sensingModel->id, $thingkingModel->id, $judgingModel->id)),
            'shortness' => 'ESTJ',
            'name' => 'Konservatif – Disiplin',
            'description' => '<ul><li>Praktis, realistis, berpegang pada fakta, dengan dorongan alamiah untuk bisnis dan mekanistis.</li><li>Sangat sistematis, procedural dan terencana.</li><li>Disiplin, on time dan pekerja keras.</li><li>Konservatif dan cenderung kaku.</li><li>Tidak tertarik pada subject yang tidak berguna baginya, tapi dapat menyesuaikan diri jika diperlukan.</li><li>Senang mengorganisir sesuatu. Bisa menjadi administrator yang baik jika mereka ingat untuk memperhatikan perasaan dan perspektif orang lain.</li></lu><h5>Saran Pengembangan</h5><ul><li>Kurangi keinginan untuk mengontrol dan memaksa orang lain.</li><li>Belajarlah untuk mengontrol emosi dan amarah Anda.</li><li>Cobalah untuk introspeksi diri dan meluangkan waktu sejenak untuk merenung.</li><li>Belajarlah untuk lebih sabar dan low profile</li><li>Belajarlah untuk memahami orang lain.<li></ul><h5>Saran Profesi</h5><p>Militer, Manajer, Polisi, Hakim, Pengacara, Guru, Sales, Auditor, Akuntan, System Analyst</p><h5>Pasangan/Partner Alami</h5><p>ISTP atau INTP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $extrovertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $judgingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($extrovertModel->id, $sensingModel->id, $feelingModel->id, $judgingModel->id)),
            'shortness' => 'ESFJ',
            'name' => 'Harmonis',
            'description' => '<ul><li>Hangat, banyak bicara, populer, dilahirkan untuk bekerjasama, suportif dan anggota kelompok yang aktif.</li><li>Membutuhkan keseimbangan dan baik dalam menciptakan harmoni.</li><li>Selalu melakukan sesuatu yang manis bagi orang lain. Kerja dengan baik dalam situasi yang mendukung dan memujinya.</li><li>Santai, easy going, sederhana, tidak berfikir panjang.</li><li>Teliti dan rajin merawat apa yang ia miliki.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan mengorbankan diri hanya untuk menyenangkan orang lain.</li><li>Jangan mengukur harga diri Anda dari perlakuan, penghargaan dan pujian orang lain.</li><li>Mintalah pertimbangan orang lain dalam mengambil keputusan. Belajarlah untuk lebih tegas.</li><li>Terima tanggungjawab hidup dan belajarlah untuk lebih dewasa. Jangan mengasihani diri sendiri.</li><li>Hadapi kritik dan konflik, jangan lari.</li></ul><h5>Saran Profesi</h5><p>Perencana Keuangan, Perawat, Guru, Bidang anak-anak, Konselor, Administratif, Hospitality</p><h5>Pasangan/Partner Alami</h5><p>ISFP atau INFP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $extrovertModel->id,
                ),
                array(
                    'variable_id' => $sensingModel->id,
                ),
                array(
                    'variable_id' => $feelingModel->id,
                ),
                array(
                    'variable_id' => $judgingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($extrovertModel->id, $intuitiveModel->id, $feelingModel->id, $judgingModel->id)),
            'shortness' => 'ENFJ',
            'name' => 'Mennyakinkan',
            'description' => '<ul><li>Kreatif, imajinatif, peka, sensitive, loyal.</li><li>Pada umumnya peduli pada apa kata orang atau apa yang orang lain inginkan dan cenderung melakukan sesuatu dengan memperhatikan perasaan orang lain.</li><li>Pandai bergaul, meyakinkan, ramah, fun, populer, simpatik. Responsif pada kritik dan pujian.</li><li>Menyukai variasi dan tantangan baru.</li><li>Butuh apresiasi dan penerimaan.</li></ul><h5>Saran Pengembangan</h5><ul><li>Jangan mengorbankan diri hanya untuk menyenangkan orang lain.</li><li>Jangan mengukur harga diri Anda dari perlakuan orang lain. Jangan mudah kecewa jika mereka tidak seperti yang Anda inginkan.</li><li>Belajarlah untuk tegas dan mengambil keputusan. Menghadapi kritik dan konflik.</li><li>Jangan terlalu bersikap keras terhadap diri sendiri.</li></ul><h5>Saran Profesi</h5><p>Konsultan, Psikolog, Konselor, Pengajar, Marketing, HRD, Event Coordinator, Entertainer, Penulis, Motivator</p><h5>Pasangan/Partner Alami</h5><p>INFP atau ISFP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $extrovertModel->id,
                ),
                array(
                    'variable_id' => $intuitiveModel->id,
                ),
                array(
                    'variable_id' => $feelingModel->id,
                ),
                array(
                    'variable_id' => $judgingModel->id,
                ),
            )
        ),
        array(
            'slug' => implode('-', array($extrovertModel->id, $intuitiveModel->id, $thingkingModel->id, $judgingModel->id)),
            'shortness' => 'ENTJ',
            'name' => 'Pemimpin Alami',
            'description' => '<ul><li>Tegas, asertif, to the point, jujur terus terang, obyektif, kritis, & punya standard tinggi.</li><li>Dominan, kuat kemauannya, perfeksionis dan kompetitif.</li><li>Tangguh, disiplin, dan sangat menghargai komitmen.</li><li>Cenderung menutupi perasaan dan menyembunyikan kelemahan.</li><li>Berkarisma, komunikasi baik, mampu menggerakkan orang.</li><li>Berbakat pemimpin.</li></ul><h5>Saran Pengembangan</h5><ul><li>Belajarlah untuk relaks. Tidak perlu perfeksionis dan selalu kompetitif dengan semua orang.</li><li>Ungkapkan perasaan Anda. Menyatakan perasaan bukanlah kelemahan.</li><li>Belajarlah mengelola emosi Anda. Jangan mudah marah.</li><li>Belajarlah untuk menghargai dan mengapresiasi orang lain.</li><li>Jangan terlalu arogan dan menganggap remeh orang lain. Lihat sisi positifnya. Jangan hanya melihat benar dan salah saja.</li></ul><h5>Saran Profesi</h5><p>Entrepreneur, Pengacara, Hakim, Konsultan, Pemimpin Organisasi, Business analyst, Bidang Finansial</p><h5>Pasangan/Partner Alami</h5><p>INTP atau ISTP</p>',
            'user_profile_id' => 2,
            'combinations' => array(
                array(
                    'variable_id' => $extrovertModel->id,
                ),
                array(
                    'variable_id' => $intuitiveModel->id,
                ),
                array(
                    'variable_id' => $thingkingModel->id,
                ),
                array(
                    'variable_id' => $judgingModel->id,
                ),
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