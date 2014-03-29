<?php

class m140328_214556_insert_dummy_data_types extends CDbMigration {

   public function up() {
        $row = array(
            array(
                'slug' => Type::model()->slugify('mbti'),
                'name' => 'MBTI (Myers-Briggs Type Indicator)',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('disc'),
                'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('epps'),
                'name' => 'EPPS (Edwards Personal Preference Schedule)',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('16pf'),
                'name' => '16PF (16 Personality Factors)',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('modalitas-belajar'),
                'name' => 'Modalitas Belajar',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('papi-kostick'),
                'name' => 'PAPI Kostick (Personality and Preference Inventory)',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('rmib'),
                'name' => 'RMIB (Rothwell Miller Interest Blank)',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('ist'),
                'name' => 'IST (Initial Strength Test)',
                'description' => '',
            ),
            array(
                'slug' => Type::model()->slugify('mmi'),
                'name' => 'MMI (Multiple Mini Interview)',
                'description' => '',
            ),
        );
        foreach ($row as $column) {
            $column['status'] = Status::ACTIVE;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');
            
            $this->insert('types', $column);
        }
    }

    public function down() {
    }


}
