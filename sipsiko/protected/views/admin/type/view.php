<?php
$this->breadcrumbs = array(
    'Types' => array('index'),
    $model->name,
);
?>

<div class="block">
    <div class="block-title">
        <h2>View Type #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'slug',
            'name',
            'description',
            'status',
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/type'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
</div>