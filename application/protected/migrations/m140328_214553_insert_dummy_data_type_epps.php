<?php

class m140328_214553_insert_dummy_data_type_epps extends CDbMigration {

    public function up() {
        $slug = Type::model()->slugify('epps');

        $type = array(
            'slug' => $slug,
            'name' => 'EPPS (Edwards Personal Preference Schedule)',
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
        $slug = Type::model()->slugify('epps');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
