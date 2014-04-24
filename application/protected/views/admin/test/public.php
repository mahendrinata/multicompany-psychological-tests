<?php
$this->breadcrumbs = array(
    'Member Public Tests' => array('member'),
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
        <h2><strong>Member Tests</strong> Management</h2>
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
                    'filter' => CHtml::activeTelField($model, 'id', array('id' => false, 'class' => 'form-control text-right'))
                ),
                array(
                    'name' => 'name',
                    'filter' => CHtml::activeTelField($model, 'name', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'description',
                    'filter' => CHtml::activeTelField($model, 'description', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'duration',
                    'htmlOptions' => array('class' => 'text-right'),
                    'filter' => CHtml::activeTelField($model, 'duration', array('id' => false, 'class' => 'form-control text-right'))
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
                    'name' => 'type_id',
                    'filter' => CHtml::activeDropDownList($model, 'type_id', CHtml::listData(Type::model()->findAll(), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type Test')),
                    'header' => 'Type Test',
                    'value' => '$data->type->name'
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
                    'template' => '{generate}',
                    'buttons' => array(
                        'generate' => array(
                            'label' => 'Generate Public Test',
                            'imageUrl' => Yii::app()->request->baseUrl . '/images/icon/add.png',
                            'url' => 'Yii::app()->controller->createUrl("admin/usertest/generate", array("id"=>$data->id))',
                        ),
                    ),
                )
            ),
        ));
        ?>
    </div>
</div>
