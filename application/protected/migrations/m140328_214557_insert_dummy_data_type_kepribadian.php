<?php

class m140328_214557_insert_dummy_data_type_kepribadian extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::slugify('Kepribadian');

        $type = array(
            'slug' => $slug,
            'name' => 'Kepribadian',
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
        $slug = Type::slugify('Kepribadian');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
