<?php
$this->breadcrumbs = array(
    'User Tests' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#user-test-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="block">
    <div class="block-title">
        <h2><strong>User Tests</strong> Management</h2>
    </div>
    <div class="table-options clearfix">
        <div class="btn-group btn-group-sm pull-right">
            <?php echo CHtml::link('<i class="icon-plus"></i> New User Test', array('admin/usertest/create'), array('class' => 'btn btn-success')); ?>
        </div>
    </div>
    <div class="table-responsive">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'itemsCssClass' => 'table table-bordered table-striped table-vcenter',
            'rowCssClass' => array(),
            'id' => 'user-test-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'ajaxUpdate' => true,
            'afterAjaxUpdate' => 'function(id, data){$(".select-chosen").chosen({width: "100%",allow_single_deselect: true});$(".input-datepicker").datepicker({format: "yyyy-mm-dd"});}',
            'pager' => array(
                'firstPageLabel' => '<<',
                'prevPageLabel' => '<',
                'nextPageLabel' => '>',
                'lastPageLabel' => '>>',
                'htmlOptions' => array('class' => 'yiiPager pagination pagination-sm remove-margin'),
                'header' => ' ',
                'cssFile' => '',
                'selectedPageCssClass' => 'active',
            ),
            'pagerCssClass' => 'pagination',
            'summaryCssClass' => 'alert alert-info',
            'columns' => array(
                array(
                    'name' => 'id',
                    'header' => 'ID',
                    'filterHtmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'htmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'filter' => CHtml::activeTelField($model, 'id', array('id' => false, 'class' => 'form-control text-right'))
                ),
                array(
                    'name' => 'user_profile.first_name',
                    'value' => '$data->user_profile->first_name',
                    'header' => 'Member Name'
                ),
//                array(
//                    'name' => 'company.first_name',
//                    'value' => '$data->company->first_name',
//                    'header' => 'Company Name'
//                ),
                array(
                    'name' => 'status',
                    'filter' => '',
                    'type' => 'raw',
                    'value' => 'Status::get_tag_label($data->status)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'test_id',
                    'filter' => CHtml::activeDropDownList($model, 'test_id', CHtml::listData(Test::model()->getTestCompany($this->profiles[RolePrivilege::COMPANY]), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type Test')),
                    'value' => '$data->test->name'
                ),
                array(
                    'name' =>'test.duration',
                    'value' => '$data->test->duration',
                    'filter' => '',
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' =>'test.start_date',
                    'value' => '$data->test->start_date',
                    'filter' => ''
                ),
                array(
                    'name' =>'test.end_date',
                    'value' => '$data->test->end_date',
                    'filter' => ''
                ),
//                array(
//                    'name' => 'created_at',
//                    'filter' => CHtml::activeTelField($model, 'created_at', array('id' => false, 'class' => 'form-control input-datepicker'))
//                ),
//                array(
//                    'name' => 'updated_at',
//                    'filter' => CHtml::activeTelField($model, 'updated_at', array('id' => false, 'class' => 'form-control input-datepicker'))
//                ),
                array(
                    'class' => 'CButtonColumn',
                    'filterHtmlOptions' => array('style' => 'width: 80px;')
                ),
            ),
        ));
        ?>
    </div>
</div>
