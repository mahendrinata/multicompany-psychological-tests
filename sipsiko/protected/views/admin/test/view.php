<?php
$this->breadcrumbs = array(
    'Tests' => array('index'),
    $testModel->name,
);
?>

<div class="block">
    <div class="block-title">
        <h2>View Test #<strong><?php echo $testModel->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $testModel,
        'attributes' => array(
            'id',
            'slug',
            'name',
            'description',
            'duration',
            'start_date',
            'end_date',
            array(
                'name' => 'status',
                'value' => Status::get_tag_label($testModel->status),
                'type' => 'raw'
            ),
            array(
                'name' => 'is_public',
                'value' => ModelHelper::getBooleanLabel($testModel->is_public),
                'type' => 'raw'
            ),
            'combination_variable',
            'type.name',
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <div class="table-responsive">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'itemsCssClass' => 'table table-bordered table-striped table-vcenter',
            'rowCssClass' => array(),
            'id' => 'test-grid',
            'dataProvider' => $questionModel->search(),
            'filter' => $questionModel,
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
                    'filter' => CHtml::activeTelField($questionModel, 'id', array('id' => false, 'class' => 'form-control text-right'))
                ),
                array(
                    'name' => 'description',
                    'filter' => CHtml::activeTelField($questionModel, 'description', array('id' => false, 'class' => 'form-control'))
                ),
                array(
                    'name' => 'question.answers',
                    'filter' => '',
                    'type' => 'raw',
                    'value' => 'ModelHelper::getAnswerList($data->answers)',
                ),
                array(
                    'name' => 'status',
                    'filter' => CHtml::activeDropDownList($questionModel, 'status', Status::get_map(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Status')),
                    'type' => 'raw',
                    'value' => 'Status::get_tag_label($data->status)',
                    'htmlOptions' => array('class' => 'text-center'),
                ),
                array(
                    'name' => 'created_at',
                    'filter' => CHtml::activeTelField($questionModel, 'created_at', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'name' => 'updated_at',
                    'filter' => CHtml::activeTelField($questionModel, 'updated_at', array('id' => false, 'class' => 'form-control input-datepicker'))
                ),
                array(
                    'class' => 'CButtonColumn',
                    'filterHtmlOptions' => array('style' => 'width: 120px;'),
                    'template' => '{update} {delete}',
                    'buttons' => array(
                        'update' => array(
                            'url' => 'Yii::app()->controller->createUrl("admin/question/update", array("id"=>$data->id))',
                            'visible' => '($data->status != "' . Status::VOID . '") ? true : false',
                        ),
                        'delete' => array(
                            'url' => 'Yii::app()->controller->createUrl("admin/question/delete", array("id"=>$data->id))',
                            'visible' => '($data->status != "' . Status::VOID . '") ? true : false',
                        ),
                    ),
                    'visible' => $testModel->is_expert
                )
            ),
        ));
        ?>
    </div>
    <?php
    if ($testModel->is_expert) {
        echo CHtml::link('<i class="fa fa-plus"></i> Add Question', array('admin/question/create', 'id' => $testModel->slug), array('class' => 'btn btn-success', 'style' => 'margin-bottom:20px;'));
        echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/test/index'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;'));
    } else {
        echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/test/company'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;'));
    }
    ?>
</div>