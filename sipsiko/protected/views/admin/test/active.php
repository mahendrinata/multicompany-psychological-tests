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
        <h2><strong>Tests of Company</strong> Management</h2>
    </div>
    <div class="table-options clearfix">
        <div class="btn-group btn-group-sm pull-right">
            <button class="btn btn-primary search-button">
                <i class="icon-search"></i> Advanced Search
            </button>
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
            'dataProvider' => $model->with('user_profiles')->search(),
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
                    'name' => 'slug',
                    'filter' => CHtml::activeTelField($model, 'slug', array('id' => false, 'class' => 'form-control'))
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
                    'name' => 'status',
                    'filter' => '',
                    'type' => 'raw',
                    'value' => 'Status::get_tag_label($data->status)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'is_public',
                    'filter' => CHtml::activeDropDownList($model, 'is_public', Test::model()->getPublicationStatus(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Publication')),
                    'type' => 'raw',
                    'value' => '$data->is_public',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'combination_variable',
                    'filter' => CHtml::activeTelField($model, 'combination_variable', array('id' => false, 'class' => 'form-control text-right')),
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'user_profile_id',
                    'filter' => CHtml::activeDropDownList($model, 'user_profile_id', CHtml::listData(UserProfile::model()->getUserProfilesByRole(RolePrivilege::EXPERT), 'id', 'first_name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Expert Name')),
                    'value' => '$data->user_profile->first_name',
                    'header' => 'Expert Name'
                ),
                array(
                    'name' => 'type_id',
                    'filter' => CHtml::activeDropDownList($model, 'type_id', CHtml::listData(Type::model()->findAll(), 'id', 'name'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Type Test')),
                    'header' => 'Type Test',
                    'value' => '$data->type->name'
                ),
                array(
                    'name' => 'created_at',
                    'filter' => CHtml::activeTelField($model, 'created_at', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'name' => 'updated_at',
                    'filter' => CHtml::activeTelField($model, 'updated_at', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'deleteConfirmation' => 'Generate Test of Company',
                    'buttons' => array(
                        'delete' => array(
                            'label' => 'Generate',
                            'imageUrl' => Yii::app()->request->baseUrl . '/images/icon/add.png',
                            'url' => 'Yii::app()->controller->createUrl("admin/test/generate", array("id"=>$data->slug))',
                        ),
                    ),)
            ),
        ));
        ?>
    </div>
</div>