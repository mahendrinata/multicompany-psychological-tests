<?php

class m140328_214556_insert_dummy_data_types extends CDbMigration {

   public function up() {
        $row = array(
            array(
                'slug' => Role::model()->slugify('mbti'),
                'name' => 'MBTI (Myers-Briggs Type Indicator)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('disc'),
                'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('epps'),
                'name' => 'EPPS (Edwards Personal Preference Schedule)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('16pf'),
                'name' => '16PF (16 Personality Factors)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('ist'),
                'name' => 'IST (Initial Strength Test)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('mmi'),
                'name' => 'MMI (Multiple Mini Interview)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('modalitas-belajar'),
                'name' => 'Modalitas Belajar',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('papi-kostick'),
                'name' => 'PAPI Kostick (Personality and Preference Inventory)',
                'description' => '',
                'status' => Status::ACTIVE,
            ),
            array(
                'slug' => Role::model()->slugify('rmib'),
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
    }


}
