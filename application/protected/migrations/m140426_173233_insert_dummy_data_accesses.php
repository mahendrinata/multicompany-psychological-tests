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
            array(
                'slug' => Access::slugify('admin/type'),
                'name' => 'Type Index',
                'url' => 'admin/type',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/type/index'),
                'name' => 'Type Index',
                'url' => 'admin/type/index',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/type/view'),
                'name' => 'View Type',
                'url' => 'admin/type/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/type/create'),
                'name' => 'Create Type',
                'url' => 'admin/type/create',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/type/update'),
                'name' => 'Update Type',
                'url' => 'admin/type/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/type/delete'),
                'name' => 'Delete Type',
                'url' => 'admin/type/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/user'),
                'name' => 'User Index',
                'url' => 'admin/user',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/user/index'),
                'name' => 'User Index',
                'url' => 'admin/user/index',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/user/view'),
                'name' => 'View User',
                'url' => 'admin/user/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/user/create'),
                'name' => 'Create User',
                'url' => 'admin/user/create',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/user/update'),
                'name' => 'Update User',
                'url' => 'admin/user/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/user/delete'),
                'name' => 'Delete User',
                'url' => 'admin/user/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::ADMIN . '-' . Position::ADMIN],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/validation'),
                'name' => 'Expert Validation User Test',
                'url' => 'admin/usertest/validation',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/savevalidationanswer'),
                'name' => 'Expert Save Validation Answer User Test',
                'url' => 'admin/usertest/savevalidationanswer',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/savevalidationspenttime'),
                'name' => 'Expert Validation Spent Time User Test',
                'url' => 'admin/usertest/savevalidationspenttime',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/validationview'),
                'name' => 'Expert Validation View User Test',
                'url' => 'admin/usertest/validationview',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/validationdelete'),
                'name' => 'Expert Validation Delete User Test',
                'url' => 'admin/usertest/validationdelete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/publictest'),
                'name' => 'Expert Public User Test',
                'url' => 'admin/usertest/publictest',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/publicresult'),
                'name' => 'Expert Public Result User Test',
                'url' => 'admin/usertest/validation',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest'),
                'name' => 'User Test Index',
                'url' => 'admin/usertest',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/index'),
                'name' => 'User Test Index',
                'url' => 'admin/usertest/index',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/view'),
                'name' => 'View User Test',
                'url' => 'admin/usertest/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/create'),
                'name' => 'Create User Test',
                'url' => 'admin/usertest/create',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/update'),
                'name' => 'Update User Test',
                'url' => 'admin/usertest/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/delete'),
                'name' => 'Delete User Test',
                'url' => 'admin/usertest/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/membertest'),
                'name' => 'Member User Test Index',
                'url' => 'admin/usertest/membertest',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/result'),
                'name' => 'Company Result User Test',
                'url' => 'admin/usertest/result',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/settestvariable'),
                'name' => 'Company Set Test Variable User Test',
                'url' => 'admin/usertest/settestvariable',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::COMPANY . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/member'),
                'name' => 'Member User Test Index',
                'url' => 'admin/usertest/member',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/test'),
                'name' => 'Member Test User Test',
                'url' => 'admin/usertest/test',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/savetestanswer'),
                'name' => 'Member Set Test Answer User Test',
                'url' => 'admin/usertest/savetestanswer',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/setspenttime'),
                'name' => 'Member Set Spent Time User Test',
                'url' => 'admin/usertest/setspenttime',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/memberresult'),
                'name' => 'Member User Test Result',
                'url' => 'admin/usertest/memberresult',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/generate'),
                'name' => 'Member Generate User Test',
                'url' => 'admin/usertest/generate',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/usertest/viewmember'),
                'name' => 'Member View User Test',
                'url' => 'admin/usertest/viewmember',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::MEMBER . '-' . Position::MEMBER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variable'),
                'name' => 'Variable Index',
                'url' => 'admin/variable',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variable/index'),
                'name' => 'Variable Index',
                'url' => 'admin/variable/index',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variable/view'),
                'name' => 'View Variable',
                'url' => 'admin/variable/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variable/create'),
                'name' => 'Create Variable',
                'url' => 'admin/variable/create',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variable/update'),
                'name' => 'Update Variable',
                'url' => 'admin/variable/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variable/delete'),
                'name' => 'Delete Variable',
                'url' => 'admin/variable/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variabledetail'),
                'name' => 'Variable Detail Index',
                'url' => 'admin/variabledetail',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variabledetail/index'),
                'name' => 'Variable Detail Index',
                'url' => 'admin/variabledetail/index',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variabledetail/view'),
                'name' => 'View Variable Detail',
                'url' => 'admin/variabledetail/view',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variabledetail/create'),
                'name' => 'Create Variable Detail',
                'url' => 'admin/variabledetail/create',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variabledetail/update'),
                'name' => 'Update Variable Detail',
                'url' => 'admin/variabledetail/update',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
                )
            ),
            array(
                'slug' => Access::slugify('admin/variabledetail/delete'),
                'name' => 'Delete Variable Detail',
                'url' => 'admin/variabledetail/delete',
                'params' => 'id:true',
                'Positions' => array(
                    $positions[Role::EXPERT . '-' . Position::OWNER],
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
