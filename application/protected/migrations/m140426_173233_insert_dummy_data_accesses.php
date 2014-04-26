<?php

class m140426_173233_insert_dummy_data_accesses extends CDbMigration {

    public function up() {
        $user = User::model()->findByAttributes(array('username' => 'admin'));
        $positions = CHtml::listData(Position::model()->findAll(), 'slug', 'id');
        $row = array(
            array(
                'slug' => Access::slugify('admin/answer/create'),
                'name' => 'Create Answer',
                'url' => 'admin/answer/create',
                'params' => 'id:true;type_id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/answer/delete'),
                'name' => 'Delete Answer',
                'url' => 'admin/answer/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/answer/delete'),
                'name' => 'Delete Answer',
                'url' => 'admin/answer/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/answer/delete'),
                'name' => 'Delete Answer',
                'url' => 'admin/answer/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/dashboard'),
                'name' => 'Dashboard Index',
                'url' => 'admin/dashboard',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/dashboard/index'),
                'name' => 'Dasboard Index',
                'url' => 'admin/dashboard/index',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/question/create'),
                'name' => 'Create Question',
                'url' => 'admin/question/create',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/question/update'),
                'name' => 'Update Question',
                'url' => 'admin/question/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/question/delete'),
                'name' => 'Delete Question',
                'url' => 'admin/question/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/role'),
                'name' => 'Role Index',
                'url' => 'admin/role',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/role/index'),
                'name' => 'Role Index',
                'url' => 'admin/role/index',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/role/view'),
                'name' => 'View Role',
                'url' => 'admin/role/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/role/create'),
                'name' => 'Create Role',
                'url' => 'admin/role/create',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/role/update'),
                'name' => 'Update Role',
                'url' => 'admin/role/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/role/delete'),
                'name' => 'Delete Role',
                'url' => 'admin/role/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/tag'),
                'name' => 'Tag Index',
                'url' => 'admin/tag',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/tag/index'),
                'name' => 'Tag Index',
                'url' => 'admin/tag/index',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/tag/view'),
                'name' => 'View Tag',
                'url' => 'admin/tag/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/tag/create'),
                'name' => 'Create Tag',
                'url' => 'admin/tag/create',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/tag/update'),
                'name' => 'Update Tag',
                'url' => 'admin/tag/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/tag/delete'),
                'name' => 'Delete Tag',
                'url' => 'admin/tag/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test'),
                'name' => 'Test Expert Index',
                'url' => 'admin/test',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/index'),
                'name' => 'Test Expert Index',
                'url' => 'admin/test/index',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/view'),
                'name' => 'View Expert Test',
                'url' => 'admin/test/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/create'),
                'name' => 'Create Expert Test',
                'url' => 'admin/test/create',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/update'),
                'name' => 'Update Expert Test',
                'url' => 'admin/test/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/delete'),
                'name' => 'Delete Expert Test',
                'url' => 'admin/test/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/generatevalidation'),
                'name' => 'Generate Expert Validation Test',
                'url' => 'admin/test/generatevalidation',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/result'),
                'name' => 'Result Expert Test',
                'url' => 'admin/test/result',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/viewcompany'),
                'name' => 'View Company Test',
                'url' => 'admin/test/viewcompany',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/updatecompany'),
                'name' => 'Update Company Test',
                'url' => 'admin/test/updatecompany',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/deletecompany'),
                'name' => 'Delete Company Test',
                'url' => 'admin/test/deletecompany',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/company'),
                'name' => 'Company Test Index',
                'url' => 'admin/test/company',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/active'),
                'name' => 'Company Active Test',
                'url' => 'admin/test/active',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/generate'),
                'name' => 'Generate Company Test',
                'url' => 'admin/test/generate',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/test/public'),
                'name' => 'Member Public Test',
                'url' => 'admin/test/public',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
        );
        foreach ($row as $column) {
            $column['status_id'] = Status::model()->getStatusIdBySlug(Status::ACTIVE);
            $column['created_by'] = $user->id;
            $column['created_at'] = date('Y-m-d H:i:s');

            $this->insert('statuses', $column);
        }
    }

    public function down() {
        $this->truncateTable('statuses');
    }

}
