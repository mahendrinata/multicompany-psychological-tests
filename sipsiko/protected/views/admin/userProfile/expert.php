<?php
$this->breadcrumbs = array(
    'User Profiles' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-profile-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="block">
    <div class="block-title">
        <h2><strong>Expert</strong> Management</h2>
    </div>
    <div class="table-options clearfix">
        <div class="btn-group btn-group-sm pull-right">
            <button class="btn btn-primary search-button">
                <i class="icon-search"></i> Advanced Search
            </button>
            <?php echo CHtml::link('<i class="icon-plus"></i> New Member', array('admin/userprofile/createmember'), array('class' => 'btn btn-success')); ?>
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
            'id' => 'user-profile-grid',
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
                    'name' => 'first_name',
                    'filter' => CHtml::activeTelField($model, 'first_name', array('id' => false, 'class' => 'form-control')),
                    'header' => 'Name'
                ),
                array(
                    'name' => 'address',
                    'filter' => CHtml::activeTelField($model, 'address', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'user.username',
                    'value' => '$data->user->username',
                    'filter' => CHtml::activeDropDownList($model, 'user_id', CHtml::listData(User::model()->findAll(), 'id', 'username'), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Username'))
                ),
                array(
                    'name' => 'status',
                    'filter' => CHtml::activeDropDownList($model, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')),
                    'type' => 'raw',
                    'value' => 'Status::get_tag_label($data->status)',
                    'htmlOptions' => array('class' => 'text-center'),
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
                    'filterHtmlOptions' => array('style' => 'width: 80px;')
                ),
            ),
        ));
        ?>
    </div>
</div>
