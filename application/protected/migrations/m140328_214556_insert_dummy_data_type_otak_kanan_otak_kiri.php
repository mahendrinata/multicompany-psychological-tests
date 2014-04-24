<?php

class m140328_214556_insert_dummy_data_type_otak_kanan_otak_kiri extends CDbMigration {

    public function up() {
        $slug = Type::model()->slugify('Otak Kanan Otak Kiri');

        $type = array(
            'slug' => $slug,
            'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
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
                'name' => 'Otak Kanan',
                'description' => '',
            ),
            array(
                'name' => 'Otak Kiri',
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
        $slug = Type::model()->slugify('Otak Kanan Otak Kiri');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
