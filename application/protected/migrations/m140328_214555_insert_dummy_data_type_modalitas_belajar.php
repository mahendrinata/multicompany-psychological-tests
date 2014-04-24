<?php

class m140328_214555_insert_dummy_data_type_modalitas_belajar extends CDbMigration {

    public function up() {
        $slug = Type::model()->slugify('Modalitas Belajar');

        $type = array(
            'slug' => $slug,
            'name' => 'Modalitas Belajar',
            'description' => '',
            'conclusion' => Conclusion::SINGLE,
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
                'name' => 'Visual',
                'description' => '',
            ),
            array(
                'name' => 'Auditory',
                'description' => '',
            ),
            array(
                'name' => 'Kinesthetic',
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
        $slug = Type::model()->slugify('Modalitas Belajar');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
