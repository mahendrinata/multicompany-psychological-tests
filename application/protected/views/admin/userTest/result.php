<?php
$this->breadcrumbs = array(
    'Member Result Tests' => array('member'),
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
        <h2><strong>Member Result Tests</strong> Management</h2>
    </div>
    <div class="table-options clearfix">
        <div class="btn-group btn-group-sm pull-right">
            <?php echo CHtml::link('<i class="fa fa-download"></i> Export Excel', array('admin/usertest/result', 'excel' => true), array('class' => 'btn btn-success')) ?>
        </div>
    </div>
    <div class="table-responsive">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'itemsCssClass' => 'table table-bordered table-striped table-vcenter',
            'rowCssClass' => array(),
            'id' => 'user-test-grid',
            'dataProvider' => $model->search(),
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
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'id',
                    'header' => 'ID',
                    'filterHtmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'htmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'filter' => CHtml::activeTelField($model, 'id', array('id' => false, 'class' => 'form-control text-right')),
                ),
                array(
                    'name' => 'test_id',
                    'value' => '$data->test->name',
                    'filter' => CHtml::activeDropDownList($model, 'test_id', CHtml::listData(Test::model()->getTestCompany($this->profiles[RolePrivilege::COMPANY]), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type Test')),
                    'header' => 'Test Name'
                ),
                array(
                    'name' => 'test.type.name',
                    'value' => '$data->test->type->name',
                    'header' => 'Type',
                ),
                array(
                    'name' => 'spent_time',
                    'filter' => CHtml::activeTelField($model, 'spent_time', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'time_used',
                    'filter' => CHtml::activeTelField($model, 'time_used', array('id' => false, 'class' => 'form-control text-right')),
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
                    'name' => 'test_variable.variable',
                    'filter' => '',
                    'type' => 'raw',
                    'value' => 'ModelHelper::getListTestVariable($data->test_variables, true)',
                ),
                array(
                    'name' => 'results.variable_details',
                    'type' => 'raw',
                    'value' => 'ModelHelper::getConclusion($data->results)',
                    'header' => 'Conclusion'
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{view}',
                )
            ),
        ));
        ?>
    </div>
</div>
