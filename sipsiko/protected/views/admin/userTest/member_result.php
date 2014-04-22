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
            'filter' => null,
            'columns' => array(
                array(
                    'name' => 'id',
                    'header' => 'ID',
                    'filterHtmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'htmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                ),
                array(
                    'name' => 'company.first_name',
                    'value' => '$data->company->first_name',
                    'header' => 'Company'
                ),
                array(
                    'name' => 'test.name',
                    'value' => '$data->test->name'
                ),
                array(
                    'name' => 'test.description',
                    'value' => '$data->test->description'
                ),
                array(
                    'name' => 'type',
                    'value' => '$data->test->type->name'
                ),
                array(
                    'name' => 'spent_time',
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'time_used',
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'test_variable.variable',
                    'filter' => '',
                    'type' => 'raw',
                    'value' => 'ModelHelper::getListTestVariable($data->test_variables)',
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
                    'buttons' => array(
                        'view' => array(
                            'url' => 'Yii::app()->controller->createUrl("admin/usertest/viewmember", array("id"=>$data->id))',
                        ),
                    ),
                )
            ),
        ));
        ?>
    </div>
</div>
