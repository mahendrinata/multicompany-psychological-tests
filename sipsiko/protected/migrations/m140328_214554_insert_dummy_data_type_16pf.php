<?php

class m140328_214554_insert_dummy_data_type_16pf extends CDbMigration {

    public function up() {
        $slug = Type::model()->slugify('16pf');

        $type = array(
            'slug' => $slug,
            'name' => '16PF (16 Personality Factors)',
            'description' => '',
            'conclusion' => Conclusion::PAIR,
            'template' => Template::MULTIPLE_CHOICE,
            'status' => Status::ACTIVE,
            'user_profile_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );
        $this->insert('types', $type);

        $typeModel = Type::model()->findBySlug($slug);

        $row = array(
            array(
                'name' => 'Warmth',
                'description' => '',
            ),
            array(
                'name' => 'Reasoning',
                'description' => '',
            ),
            array(
                'name' => 'Emotional Stability',
                'description' => '',
            ),
            array(
                'name' => 'Dominance',
                'description' => '',
            ),
            array(
                'name' => 'Liveliness',
                'description' => '',
            ),
            array(
                'name' => 'Rule Consciousness',
                'description' => '',
            ),
            array(
                'name' => 'Social Boldness',
                'description' => '',
            ),
            array(
                'name' => 'Sensitivity',
                'description' => '',
            ),
            array(
                'name' => 'Vigilance',
                'description' => '',
            ),
            array(
                'name' => 'Abstractedness',
                'description' => '',
            ),
            array(
                'name' => 'Privateness',
                'description' => '',
            ),
            array(
                'name' => 'Apprehension',
                'description' => '',
            ),
            array(
                'name' => 'Openness to Change ',
                'description' => '',
            ),
            array(
                'name' => 'Self Reliance',
                'description' => '',
            ),
            array(
                'name' => 'Perfectionism',
                'description' => '',
            ),
            array(
                'name' => 'Tension',
                'description' => '',
            ),
        );

        foreach ($row as $column) {
            $column['slug'] = $typeModel->slug . '-' . Variable::model()->slugify($column['name']);
            $column['status'] = Status::ACTIVE;
            $column['type_id'] = $typeModel->id;
            $column['user_profile_id'] = 2;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $this->insert('variables', $column);
        }
    }

    public function down() {
        $slug = Type::model()->slugify('16pf');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
