<?php

class m140328_214551_insert_dummy_data_type_disc extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::slugify('disc');

        $type = array(
            'slug' => $slug,
            'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
            'description' => '',
            'conclusion_id' => Conclusion::getConclusionIdBySlug(Conclusion::DISC),
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
        $slug = Type::slugify('disc');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
