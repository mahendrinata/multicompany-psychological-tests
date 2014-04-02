<?php
$this->breadcrumbs = array(
    'Variable Details' => array('index'),
    $model->id,
);
?>

<div class="block">
    <div class="block-title">
        <h2>View Variable Detail #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'slug',
            'description:html',
            'status',
            'user_profile.first_name',
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/variabledetail'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
</div>
