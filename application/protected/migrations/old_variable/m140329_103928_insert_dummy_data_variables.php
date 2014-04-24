<?php

class m140329_103928_insert_dummy_data_variables extends CDbMigration {

    public function up() {
        $row = array(
            /**
             * MBTI (Myers-Briggs Type Indicator)
             */
            array(
                'name' => 'Extrovert',
                'description' => 'Ekstrovert artinya tipe pribadi yang suka bergaul, menyenangi interaksi sosial dengan orang lain, dan berfokus pada the world outside the self.',
                'type_id' => 1
            ),
            array(
                'name' => 'Introvert',
                'description' => 'Introvert adalah mereka yang senang menyendiri, reflektif, dan tidak begitu suka bergaul dengan banyak orang. Orang introvert lebih suka mengerjakan aktivitas yang tidak banyak menutut interaksi semisal membaca, menulis, dan berpikir secara imajinatif.',
                'type_id' => 1
            ),
            array(
                'name' => 'Sensing',
                'description' => 'Sensing memproses data dengan cara bersandar pada fakta yang konkrit, factual facts, dan melihat data apa adanya.',
                'type_id' => 1
            ),
            array(
                'name' => 'Intuitive',
                'description' => 'Intuitive memproses data dengan melihat pola dan impresi, serta melihat berbagai kemungkinan yang bisa terjadi.',
                'type_id' => 1
            ),
            array(
                'name' => 'Thinking',
                'description' => 'Thinking adalah mereka yang selalu menggunakan logika dan kekuatan analisa untuk mengambil keputusan.',
                'type_id' => 1
            ),
            array(
                'name' => 'Feeling',
                'description' => 'Feeling adalah mereka yang melibatkan perasaan, empati serta nilai-nilai yang diyakini ketika hendak mengambil keputusan.',
                'type_id' => 1
            ),
            array(
                'name' => 'Judging',
                'description' => 'Judging disini diartikan sebagai tipe orang yang selalu bertumpu pada rencana yang sistematis, serta senantiasa berpikir dan bertindak secara sekuensial (tidak melompat-lompat).',
                'type_id' => 1
            ),
            array(
                'name' => 'Perceiving',
                'description' => 'Perceiving adalah mereka yang bersikap fleksibel, adaptif, dan bertindak secara random untuk melihat beragam peluang yang muncul.',
                'type_id' => 1
            ),
            /**
             * DISC (Dominance, Influence, Steadiness, Compliance)
             */
            array(
                'name' => 'Dominance',
                'description' => 'Dorongan untuk mengontrol, meraih tujuan/target. Intensi dasarnya to overcome.',
                'type_id' => 2
            ),
            array(
                'name' => 'Influence',
                'description' => 'Dorongan untuk mempengaruhi, berekspresi, dan didengarkan. Intensi dasar: to persuade.',
                'type_id' => 2
            ),
            array(
                'name' => 'Steadiness',
                'description' => 'Dorongan untuk menjadi stabil dan konsisten. Intensi dasarnya to support.',
                'type_id' => 2
            ),
            array(
                'name' => 'Compliance',
                'description' => 'Dorongan untuk menjadi benar, pasti dan aman. Intensi dasarnya to avoid trouble.',
                'type_id' => 2
            ),
            array(
                'name' => 'Star',
                'description' => 'Variable kosong (Pembanding).',
                'type_id' => 2
            ),
            /**
             * EPPS (Edwards Personal Preference Schedule)
             */
            array(
                'name' => 'Achievement',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Deference',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Order',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Exhibition',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Autonomy',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Affiliation',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Intraception',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Succorance',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Dominance',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Abasement',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Nurturance',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Change',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Endurance',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Heterosexuality',
                'description' => '',
                'type_id' => 3
            ),
            array(
                'name' => 'Aggression',
                'description' => '',
                'type_id' => 3
            ),
            /**
             * 16PF (16 Personality Factors)
             */
            array(
                'name' => 'Warmth',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Reasoning',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Emotional Stability',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Dominance',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Liveliness',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Rule Consciousness',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Social Boldness',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Sensitivity',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Vigilance',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Abstractedness',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Privateness',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Apprehension',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Openness to Change ',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Self Reliance',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Perfectionism',
                'description' => '',
                'type_id' => 4
            ),
            array(
                'name' => 'Tension',
                'description' => '',
                'type_id' => 4
            ),
            /**
             * Modalitas Belajar
             */
            array(
                'name' => 'Visual',
                'description' => '',
                'type_id' => 5
            ),
            array(
                'name' => 'Auditory',
                'description' => '',
                'type_id' => 5
            ),
            array(
                'name' => 'Kinesthetic',
                'description' => '',
                'type_id' => 5
            ),
            /**
             * Otak Kanan Otak Kiri
             */
            array(
                'name' => 'Otak Kanan',
                'description' => '',
                'type_id' => 6
            ),
            array(
                'name' => 'Otak Kiri',
                'description' => '',
                'type_id' => 6
            ),
            /**
             * Kepribadian
             */
            array(
                'name' => 'Sanguinis',
                'description' => '',
                'type_id' => 7
            ),
            array(
                'name' => 'Koleris',
                'description' => '',
                'type_id' => 7
            ),
            array(
                'name' => 'Melankolis',
                'description' => '',
                'type_id' => 7
            ),
            array(
                'name' => 'Plegmatis',
                'description' => '',
                'type_id' => 7
            ),
        );
        foreach ($row as $column) {
            $column['status'] = Status::ACTIVE;
            $column['user_profile_id'] = 2;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $this->insert('variables', $column);
        }
    }

    public function down() {
        $this->truncateTable('variables');
    }

}
