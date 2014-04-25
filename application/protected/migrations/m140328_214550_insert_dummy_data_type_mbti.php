<?php

class m140328_214550_insert_dummy_data_type_mbti extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::model()->slugify('mbti');

        $type = array(
            'slug' => $slug,
            'name' => 'MBTI (Myers-Briggs Type Indicator)',
            'description' => '',
            'conclusion_id' => Conclusion::PAIR,
            'template_test_id' => Template::MULTIPLE_CHOICE,
            'status_id' => Status::model()->getStatusIdBySlug(Status::ACTIVE),
            'expert_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $user->id
        );
        $this->insert('types', $type);

        $typeModel = Type::model()->findBySlug($slug);

        $row = array(
            array(
                'name' => 'Extrovert',
                'description' => 'Ekstrovert artinya tipe pribadi yang suka bergaul, menyenangi interaksi sosial dengan orang lain, dan berfokus pada the world outside the self.',
            ),
            array(
                'name' => 'Introvert',
                'description' => 'Introvert adalah mereka yang senang menyendiri, reflektif, dan tidak begitu suka bergaul dengan banyak orang. Orang introvert lebih suka mengerjakan aktivitas yang tidak banyak menutut interaksi semisal membaca, menulis, dan berpikir secara imajinatif.',
            ),
            array(
                'name' => 'Sensing',
                'description' => 'Sensing memproses data dengan cara bersandar pada fakta yang konkrit, factual facts, dan melihat data apa adanya.',
            ),
            array(
                'name' => 'Intuitive',
                'description' => 'Intuitive memproses data dengan melihat pola dan impresi, serta melihat berbagai kemungkinan yang bisa terjadi.',
            ),
            array(
                'name' => 'Thinking',
                'description' => 'Thinking adalah mereka yang selalu menggunakan logika dan kekuatan analisa untuk mengambil keputusan.',
            ),
            array(
                'name' => 'Feeling',
                'description' => 'Feeling adalah mereka yang melibatkan perasaan, empati serta nilai-nilai yang diyakini ketika hendak mengambil keputusan.',
            ),
            array(
                'name' => 'Judging',
                'description' => 'Judging disini diartikan sebagai tipe orang yang selalu bertumpu pada rencana yang sistematis, serta senantiasa berpikir dan bertindak secara sekuensial (tidak melompat-lompat).',
            ),
            array(
                'name' => 'Perceiving',
                'description' => 'Perceiving adalah mereka yang bersikap fleksibel, adaptif, dan bertindak secara random untuk melihat beragam peluang yang muncul.',
            ),
        );
        foreach ($row as $column) {
            $column['slug'] = $typeModel->slug . '-' . Variable::model()->slugify($column['name']);
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['type_id'] = $typeModel->id;
            $column['expert_id'] = 1;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['created_by'] = $user->id;

            $this->insert('variables', $column);
        }
    }

    public function down() {
        $slug = Type::model()->slugify('mbti');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
