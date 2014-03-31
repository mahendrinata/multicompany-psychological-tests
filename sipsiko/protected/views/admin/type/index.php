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
            <?php echo CHtml::link('<i class="icon-plus"></i> New Type', array('admin/type/create'), array('class' => 'btn btn-success')); ?>
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
                    'filterHtmlOptions' => array('style' => 'max-width: 50px;', 'align' => 'right'),
                    'htmlOptions' => array('style' => 'max-width: 50px;', 'align' => 'right'),
                    'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control')
                ),
                array(
                    'name' => 'slug',
                    'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control')
                ),
                array(
                    'name' => 'name',
                    'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control')
                ),
                array(
                    'name' => 'description',
                    'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control')
                ),
                array(
                    'name' => 'status',
                    'filter' => Status::get_map(),
                    'dropDownHtmlOption' => array('id' => false, 'prompt' => '', 'class' => 'form-control'),
                ),
                array(
                    'name' => 'created_at',
                    'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control input-datepicker')
                ),
                array(
                    'name' => 'updated_at',
                    'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control input-datepicker')
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