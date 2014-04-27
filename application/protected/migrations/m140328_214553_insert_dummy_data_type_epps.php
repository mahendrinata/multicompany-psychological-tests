<?php

class m140328_214553_insert_dummy_data_type_epps extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::slugify('epps');

        $type = array(
            'slug' => $slug,
            'name' => 'EPPS (Edwards Personal Preference Schedule)',
            'description' => '',
            'conclusion_id' => Conclusion::getConclusionIdBySlug(Conclusion::PAIR),
            'template_test_id' => Conclusion::getConclusionIdBySlug(Template::MULTIPLE_CHOICE),
            'status_id' => Status::model()->getStatusIdBySlug(Status::ACTIVE),
            'expert_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $user->id
        );
        $this->insert('types', $type);

        $typeModel = Type::model()->findBySlug($slug);

        $row = array(
            array(
                'name' => 'Achievement',
                'description' => '',
            ),
            array(
                'name' => 'Deference',
                'description' => '',
            ),
            array(
                'name' => 'Order',
                'description' => '',
            ),
            array(
                'name' => 'Exhibition',
                'description' => '',
            ),
            array(
                'name' => 'Autonomy',
                'description' => '',
            ),
            array(
                'name' => 'Affiliation',
                'description' => '',
            ),
            array(
                'name' => 'Intraception',
                'description' => '',
            ),
            array(
                'name' => 'Succorance',
                'description' => '',
            ),
            array(
                'name' => 'Dominance',
                'description' => '',
            ),
            array(
                'name' => 'Abasement',
                'description' => '',
            ),
            array(
                'name' => 'Nurturance',
                'description' => '',
            ),
            array(
                'name' => 'Change',
                'description' => '',
            ),
            array(
                'name' => 'Endurance',
                'description' => '',
            ),
            array(
                'name' => 'Heterosexuality',
                'description' => '',
            ),
            array(
                'name' => 'Aggression',
                'description' => '',
            ),
        );

        foreach ($row as $column) {
            $column['slug'] = $typeModel->slug . '-' . Variable::slugify($column['name']);
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['type_id'] = $typeModel->id;
            $column['expert_id'] = 1;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['created_by'] = $user->id;

            $this->insert('variables', $column);
        }
    }

    public function down() {
        $slug = Type::slugify('epps');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
