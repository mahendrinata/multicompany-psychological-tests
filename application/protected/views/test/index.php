<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#user-test-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="container-fluid" id="wrapper-header">
    <div id="content" class="container clearfix">
        <nav id="page-title" >
            <h1 style="margin-bottom: 20px">Daftar Tes Psikologi</h1>
        </nav>
    </div>
</div>

<div id="body-wrapper" style="background-color: #FFF">
    <div id="content" class="container clearfix" style="min-height: 600px">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'user-test-grid',
            'dataProvider' => $model->search(),
            'ajaxUpdate' => true,
            'afterAjaxUpdate' => 'function(id, data){$(".select-chosen").chosen({width: "100%",allow_single_deselect: true});$(".input-datepicker").datepicker({format: "yyyy-mm-dd"});}',
            'pager' => array(
                'firstPageLabel' => '<<',
                'prevPageLabel' => '<',
                'nextPageLabel' => '>',
                'lastPageLabel' => '>>',
            ),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'id',
                    'header' => 'ID',
                    'filterHtmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'htmlOptions' => array('style' => 'max-width: 50px;', 'class' => 'text-right'),
                    'filter' => CHtml::activeTelField($model, 'id', array('id' => false, 'style' => 'padding:10px 0'))
                ),
                array(
                    'name' => 'name',
                    'filter' => CHtml::activeTelField($model, 'name', array('id' => false, 'style' => 'padding:10px 0'))
                ),
                array(
                    'name' => 'description',
                    'filter' => CHtml::activeTelField($model, 'description', array('id' => false, 'style' => 'padding:10px 0'))
                ),
                array(
                    'name' => 'duration',
                    'htmlOptions' => array('class' => 'text-right'),
                    'filter' => CHtml::activeTelField($model, 'duration', array('id' => false, 'style' => 'padding:10px 0'))
                ),
                array(
                    'name' => 'start_date',
                    'filter' => CHtml::activeTelField($model, 'start_date', array('id' => false, 'style' => 'padding:10px 0'))
                ),
                array(
                    'name' => 'end_date',
                    'filter' => CHtml::activeTelField($model, 'end_date', array('id' => false, 'style' => 'padding:10px 0'))
                ),
                array(
                    'name' => 'type_id',
                    'filter' => CHtml::activeDropDownList($model, 'type_id', CHtml::listData(Type::model()->findAll(), 'id', 'name'), array('id' => false, 'prompt' => '', 'style' => 'padding:8px 0')),
                    'header' => 'Type Test',
                    'value' => '$data->type->name'
                ),
                array(
                    'name' => 'show_result',
                    'filter' => CHtml::activeDropDownList($model, 'show_result', array(1 => 'Yes', 0 => 'No'), array('id' => false, 'prompt' => '', 'style' => 'padding:8px 0')),
                    'type' => 'raw',
                    'value' => 'ModelHelper::getBooleanLabel($data->show_result)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{test}',
                    'buttons' => array(
                        'test' => array(
                            'label' => 'Do Test',
                            'imageUrl' => Yii::app()->request->baseUrl . '/images/icon/add.png',
                            'url' => 'Yii::app()->controller->createUrl("test/generate", array("id"=>$data->id))',
                        ),
                    ),
                )
            ),
        ));
        ?>
    </div>
</div>