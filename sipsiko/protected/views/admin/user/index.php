<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
);

$this->menu = array(
    array('label' => 'List User', 'url' => array('index')),
    array('label' => 'Create User', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="row">
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <button class="btn btn-primary search-button">
                    <i class="icon-search"></i> Advanced Search
                </button>
            </div>
            <div class="widget-content padded clearfix">
                <div class="search-form" style="display:none">
                    <?php
                    $this->renderPartial('_search', array(
                        'model' => $model,
                    ));
                    ?>
                </div>

                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'itemsCssClass' => 'table table-bordered table-striped',
                    'rowCssClass' => array(),
                    'id' => 'user-grid',
                    'dataProvider' => $model->search(),
                    'filter' => $model,
                    'ajaxUpdate' => true,
                    'pager' => array(
                        'firstPageLabel' => '<<',
                        'prevPageLabel' => '<',
                        'nextPageLabel' => '>',
                        'lastPageLabel' => '>>',
                        'htmlOptions' => array('class' => 'pagination'),
                        'header' => ' '
                    ),
                    'pagerCssClass' => '',
                    'summaryCssClass' => 'alert alert-info',
                    'columns' => array(
                        array(
                            'name' => 'id',
                            'filterHtmlOptions' => array('style' => 'max-width: 50px;', 'align' => 'right'),
                            'htmlOptions' => array('style' => 'max-width: 50px;', 'align' => 'right'),
                            'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control')
                        ),
                        array(
                            'name' => 'username',
                            'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control')
                        ),
                        array(
                            'name' => 'email',
                            'textFieldHtmlOption' => array('id' => false, 'class' => 'form-control')
                        ),
                        array(
                            'name' => 'status',
                            'filter' => Status::get_map(),
                            'dropDownHtmlOption' => array('id' => false, 'prompt' => '', 'class' => 'form-control'),
                        ),
                        array(
                            'name' => 'last_login',
                            'filter' => false
                        ),
                        array(
                            'name' => 'last_login_ip',
                            'filter' => false
                        ),
                        array(
                            'name' => 'created_at',
                            'filter' => false
                        ),
                        array(
                            'name' => 'updated_at',
                            'filter' => false
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
    </div>
</div>
