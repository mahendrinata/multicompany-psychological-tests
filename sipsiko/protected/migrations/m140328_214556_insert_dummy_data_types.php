<?php

class m140328_214556_insert_dummy_data_types extends CDbMigration {

   public function up() {
        $this->truncateTable('types');
        $row = array(
            array(
                'slug' => 'mbti',
                'name' => 'MBTI (Myers-Briggs Type Indicator)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'disc',
                'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'epps',
                'name' => 'EPPS (Edwards Personal Preference Schedule)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => '16pf',
                'name' => '16PF (16 Personality Factors)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'ist',
                'name' => 'IST (Initial Strength Test)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'mmi',
                'name' => 'MMI (Multiple Mini Interview)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'modalitas-belajar',
                'name' => 'Modalitas Belajar',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'papi-kostick',
                'name' => 'PAPI Kostick (Personality and Preference Inventory)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'mbti',
                'name' => 'MBTI (Myers-Briggs Type Indicator)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => 'rmib',
                'name' => 'RMIB (Rothwell Miller Interest Blank)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
        );
        foreach ($row as $column) {
            $this->insert('types', $column);
        }
    }

    public function down() {
        $this->truncateTable('types');
    }


}
