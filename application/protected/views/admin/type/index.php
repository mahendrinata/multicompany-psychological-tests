<?php
$this->breadcrumbs = array(
    'Types' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="block">
    <div class="block-title">
        <h2><strong>Types</strong> Management</h2>
    </div>
    <div class="table-options clearfix">
        <div class="btn-group btn-group-sm pull-right">
            <button class="btn btn-primary search-button">
                <i class="icon-search"></i> Advanced Search
            </button>
            <?php echo AccessWebUser::call()->link('<i class="icon-plus"></i> New Type', array('admin/type/create'), array('class' => 'btn btn-success')); ?>
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
            'id' => 'type-grid',
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
                    'filter' => CHtml::activeTextField($model, 'id', array('id' => false, 'class' => 'form-control text-right'))
                ),
                array(
                    'name' => 'slug',
                    'filter' => CHtml::activeTextField($model, 'slug', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'name',
                    'filter' => CHtml::activeTextField($model, 'name', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'description',
                    'filter' => CHtml::activeTextField($model, 'description', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'status_id',
                    'filter' => CHtml::activeDropDownList($model, 'status_id', Status::model()->getListStatus(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'multiple' => 'multiple', 'data-placeholder' => 'Status')),
                    'type' => 'raw',
                    'value' => 'Status::model()->getLabelStatus($data->status_id)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'expert_id',
                    'filter' => CHtml::activeDropDownList($model, 'expert_id', CHtml::listData(Expert::model()->findAll(), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'multiple' => 'multiple', 'data-placeholder' => 'Expert Name')),
                    'value' => '$data->Expert->name',
                    'header' => 'Expert Name'
                ),
                array(
                    'name' => 'created_at',
                    'filter' => CHtml::activeTextField($model, 'created_at', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'name' => 'updated_at',
                    'filter' => CHtml::activeTextField($model, 'updated_at', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'class' => 'CButtonColumn',
                    'filterHtmlOptions' => array('style' => 'width: 80px;'),
                    'buttons' => array(
                        'update' => array(
                            'visible' => '(AccessWebUser::call()->checkAccessAndExpertId("admin/type/update", $data->expert_id) && $data->status_id != "' . Status::model()->getStatusIdBySlug(Status::VOID) . '") ? true : false',
                        ),
                        'delete' => array(
                            'visible' => '(AccessWebUser::call()->checkAccessAndExpertId("admin/type/update", $data->expert_id) && $data->status_id != "' . Status::model()->getStatusIdBySlug(Status::VOID) . '") ? true : false',
                        ),
                    )
                ),
            ),
        ));
        ?>
    </div>
</div>
