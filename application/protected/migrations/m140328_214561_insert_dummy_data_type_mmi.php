<?php

class m140328_214561_insert_dummy_data_type_mmi extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'mahendri'));
        $slug = Type::slugify('mmi');

        $type = array(
            'slug' => $slug,
            'name' => 'MMI (Multiple Mini Interview)',
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
        $slug = Type::slugify('mmi');
        $typeModel = Type::model()->findBySlug($slug);
        Variable::model()->deleteAllByAttributes(array('type_id' => $typeModel->id));
        $typeModel->delete();
    }

}
