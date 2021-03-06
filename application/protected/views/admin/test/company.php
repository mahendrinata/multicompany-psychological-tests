<?php
$this->breadcrumbs = array(
    'Tests' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#test-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="block">
    <div class="block-title">
        <h2><strong>Company Tests</strong> Management</h2>
    </div>
    <div class="table-options clearfix">
        <div class="btn-group btn-group-sm pull-right">
            <button class="btn btn-primary search-button">
                <i class="icon-search"></i> Advanced Search
            </button>
            <?php echo CHtml::link('<i class="icon-plus"></i> New Company Test', array('admin/test/active'), array('class' => 'btn btn-success')); ?>
        </div>
    </div>
    <div class="search-form" style="display:none">
        <?php
        $this->renderPartial('_search', array(
            'model' => $model,
        ));
        ?>
    </div>
    <div class="table-responsive">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'itemsCssClass' => 'table table-bordered table-striped table-vcenter',
            'rowCssClass' => array(),
            'id' => 'test-grid',
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
                    'name' => 'name',
                    'filter' => CHtml::activeTelField($model, 'name', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'description',
                    'filter' => CHtml::activeTelField($model, 'description', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'duration',
                    'filter' => CHtml::activeTelField($model, 'duration', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'start_date',
                    'filter' => CHtml::activeTelField($model, 'start_date', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'end_date',
                    'filter' => CHtml::activeTelField($model, 'end_date', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'status',
                    'filter' => CHtml::activeDropDownList($model, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')),
                    'type' => 'raw',
                    'value' => 'Status::get_tag_label($data->status)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'is_public',
                    'filter' => CHtml::activeDropDownList($model, 'is_public', Test::model()->getPublicationStatus(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Publication')),
                    'type' => 'raw',
                    'value' => 'Test::model()->getPublicationLabel($data->is_public)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'show_result',
                    'filter' => CHtml::activeDropDownList($model, 'show_result', array(1 => 'Yes', 0 => 'No'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Show Result')),
                    'type' => 'raw',
                    'value' => 'ModelHelper::getBooleanLabel($data->show_result)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'type_id',
                    'filter' => CHtml::activeDropDownList($model, 'type_id', CHtml::listData(Type::model()->findAll(), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type Test')),
                    'header' => 'Type Test',
                    'value' => '$data->type->name'
                ),
                array(
                    'class' => 'CButtonColumn',
                    'filterHtmlOptions' => array('style' => 'width: 120px;'),
                    'template' => '{user} {view} {update} {delete}',
                    'buttons' => array(
                        'user' => array(
                            'label' => 'User Test',
                            'imageUrl' => Yii::app()->request->baseUrl . '/images/icon/action-log.png',
                            'url' => 'Yii::app()->controller->createUrl("admin/usertest/membertest", array("id"=>$data->id))',
                        ),
                        'view' => array(
                            'url' => 'Yii::app()->controller->createUrl("admin/test/viewcompany", array("id"=>$data->id))',
                        ),
                        'update' => array(
                            'url' => 'Yii::app()->controller->createUrl("admin/test/updatecompany", array("id"=>$data->id))',
                            'visible' => '($data->status != "' . Status::VOID . '") ? true : false',
                        ),
                        'delete' => array(
                            'url' => 'Yii::app()->controller->createUrl("admin/test/deletecompany", array("id"=>$data->id))',
                            'visible' => '($data->status != "' . Status::VOID . '") ? true : false',
                        ),
                    ))
            ),
        ));
        ?>
    </div>
</div>