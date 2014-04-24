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
                    'name' => 'spent_time',
                    'filter' => CHtml::activeTelField($model, 'spent_time', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'time_used',
                    'filter' => CHtml :: activeTelField($model, 'time_used', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'start_date',
                    'filter' => CHtml::activeTelField($model, 'start_date', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'name' => 'end_date',
                    'filter' => CHtml::activeTelField($model, 'end_date', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'name' => 'show_result',
                    'filter' => CHtml::activeDropDownList($model, 'show_result', array(1 => 'Yes', 0 => 'No'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Show Result')),
                    'type' => 'raw',
                    'value' => 'ModelHelper::getBooleanLabel($data->show_result)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{update} {delete}',
                    'filterHtmlOptions' => array('style' => 'width: 80px;')
                ),
            ),
        ));
        ?>
    </div>
</div>
