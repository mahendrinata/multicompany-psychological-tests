<?php

class m140328_214556_insert_dummy_data_type_otak_kanan_otak_kiri extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::model()->slugify('Otak Kanan Otak Kiri');

        $type = array(
            'slug' => $slug,
            'name' => 'DISC (Dominance, Influence, Steadiness, Compliance)',
            'description' => '',
            'conclusion_id' => Conclusion::SINGLE,
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
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['type_id'] = $typeModel->id;
            $column['expert_id'] = 1;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['created_by'] = $user->id;

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
