<?php

class m140328_214556_insert_dummy_data_types extends CDbMigration {

    public function up() {
        $row = array(
            array(
                'slug' => Type::slugify('mbti'),
                'name' => 'MBTI (Myers-Briggs Type Indicator)',
                'description' => '',
                'conclusion' => Conclusion::PAIR,
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('disc'),
                'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
                'description' => '',
                'conclusion' => Conclusion::DISC,
                'template' => Template::DUPLICATE_MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('epps'),
                'name' => 'EPPS (Edwards Personal Preference Schedule)',
                'description' => '',
                'conclusion' => '',
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('16pf'),
                'name' => '16PF (16 Personality Factors)',
                'description' => '',
                'conclusion' => '',
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('modalitas-belajar'),
                'name' => 'Modalitas Belajar',
                'description' => '',
                'conclusion' => Conclusion::SINGLE,
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('Otak Kanan Otak Kiri'),
                'name' => 'Otak Kanan Otak Kiri',
                'description' => '',
                'conclusion' => Conclusion::SINGLE,
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('Kepribadian'),
                'name' => 'Kepribadian',
                'description' => '',
                'conclusion' => Conclusion::SINGLE,
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('papi-kostick'),
                'name' => 'PAPI Kostick (Personality and Preference Inventory)',
                'description' => '',
                'conclusion' => '',
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('rmib'),
                'name' => 'RMIB (Rothwell Miller Interest Blank)',
                'description' => '',
                'conclusion' => '',
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('ist'),
                'name' => 'IST (Initial Strength Test)',
                'description' => '',
                'conclusion' => '',
                'template' => Template::MULTIPLE_CHOICE,
            ),
            array(
                'slug' => Type::slugify('mmi'),
                'name' => 'MMI (Multiple Mini Interview)',
                'description' => '',
                'conclusion' => '',
                'template' => Template::MULTIPLE_CHOICE,
            ),
        );
        foreach ($row as $column) {
            $column['status'] = Status::ACTIVE;
            $column['user_profile_id'] = 2;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $this->insert('types', $column);
        }
    }

    public function down() {
        $this->truncateTable('types');
    }

}
