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
            'spent_time',
            'time_used',
            'note:html',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/usertest/memberresult'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
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
                'value' => ModelHelper::getListTestVariable($model->test_variables),
            ),
            array(
                'name' => 'variable_details',
                'value' => ModelHelper::getVariableDetail($model->variable_details),
                'type' => 'html'
            )
    )));
    ?>
</div>