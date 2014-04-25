<?php

class m140328_214554_insert_dummy_data_type_16pf extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::model()->slugify('16pf');

        $type = array(
            'slug' => $slug,
            'name' => '16PF (16 Personality Factors)',
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
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['type_id'] = $typeModel->id;
            $column['expert_id'] = 1;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['created_by'] = $user->id;

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
