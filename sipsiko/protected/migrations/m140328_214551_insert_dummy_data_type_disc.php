<?php

class m140328_214551_insert_dummy_data_type_disc extends CDbMigration {

    public function up() {
        $slug = Type::model()->slugify('disc');

        $type = array(
            'slug' => $slug,
            'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
            'description' => '',
            'conclusion' => Conclusion::DISC,
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
                'name' => 'Dominance',
                'description' => 'Dorongan untuk mengontrol, meraih tujuan/target. Intensi dasarnya to overcome.',
            ),
            array(
                'name' => 'Influence',
                'description' => 'Dorongan untuk mempengaruhi, berekspresi, dan didengarkan. Intensi dasar: to persuade.',
            ),
            array(
                'name' => 'Steadiness',
                'description' => 'Dorongan untuk menjadi stabil dan konsisten. Intensi dasarnya to support.',
            ),
            array(
                'name' => 'Compliance',
                'description' => 'Dorongan untuk menjadi benar, pasti dan aman. Intensi dasarnya to avoid trouble.',
            ),
            array(
                'name' => 'Star',
                'description' => 'Variable kosong (Pembanding).',
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
        $slug = Type::model()->slugify('disc');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
