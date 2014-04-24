<?php
$this->breadcrumbs = array(
    'User Test' => array('index'),
    $model->id,
);
?>

<div class="block">
    <div class="block-title">
        <h2>View User Test #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            array(
                'name' => 'user_profile.first_name',
                'label' => 'Member Name'
            ),
            array(
                'name' => 'company.first_name',
                'label' => 'Company Name'
            ),
            array(
                'name' => 'test.name',
                'label' => 'Test Name'
            ),
            array(
                'name' => 'status',
                'value' => Status::get_tag_label($model->status),
                'type' => 'raw'
            ),
            'spent_time',
            'time_used',
            array(
                'name' => 'show_result',
                'type' => 'raw',
                'value' => ModelHelper::getBooleanLabel($model->show_result)
            ),
            'note:html',
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-check"></i> Generate Result', array('admin/usertest/settestvariable', 'id' => $model->id), array('class' => 'btn btn-success', 'style' => 'margin-bottom:20px;')); ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/usertest'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
</div>

<div class="block">
    <div class="block-title">
        <h2>Result User Test #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
        'attributes' => array(
            array(
                'name' => 'test_variable.variable',
                'type' => 'raw',
                'value' => ModelHelper::getListTestVariable($model->test_variables, true),
            ),
            array(
                'name' => 'results.variable_details',
                'value' => ModelHelper::getResultVariableDetail($model->results),
                'type' => 'html'
            )
    )));
    ?>
</div>


<div class="block">
    <div class="block-title">
        <h2>User Test Answer #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <div class="table-responsive">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'itemsCssClass' => 'table table-bordered table-striped table-vcenter',
            'rowCssClass' => array(),
            'id' => 'test-grid',
            'dataProvider' => $testAnswerModel->search(),
            'filter' => null,
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
                ),
                array(
                    'name' => 'question.description',
                    'value' => '$data->question->description',
                    'header' => 'Question'
                ),
                array(
                    'name' => 'answer.description',
                    'value' => '$data->answer->description',
                    'header' => 'Answer'
                ),
                array(
                    'name' => 'answer.value',
                    'value' => '$data->answer->value',
                    'header' => 'Point',
                    'htmlOptions' => array('class' => 'text-right'),
                ),
                array(
                    'name' => 'answer.variable.name',
                    'value' => '$data->answer->variable->name',
                    'header' => 'Variable'
                ),
                'created_at',
                'updated_at',
            ),
        ));
        ?>
    </div>
</div>

