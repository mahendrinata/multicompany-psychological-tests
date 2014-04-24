<?php

class m140328_214557_insert_dummy_data_type_kepribadian extends CDbMigration {

    public function up() {
        $slug = Type::model()->slugify('Kepribadian');

        $type = array(
            'slug' => $slug,
            'name' => 'Kepribadian',
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
                'name' => 'Sanguinis',
                'description' => '',
            ),
            array(
                'name' => 'Koleris',
                'description' => '',
            ),
            array(
                'name' => 'Melankolis',
                'description' => '',
            ),
            array(
                'name' => 'Plegmatis',
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
        $slug = Type::model()->slugify('Kepribadian');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
