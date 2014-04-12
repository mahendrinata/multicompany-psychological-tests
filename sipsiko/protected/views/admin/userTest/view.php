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
            'user_profile.first_name',
            'company.first_name',
            'test.name',
            'status',
            'spent_time',
            'time_used',
            'show_result',
            'note',
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/usertest'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
</div>