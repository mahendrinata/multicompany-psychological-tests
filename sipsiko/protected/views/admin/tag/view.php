<?php
$this->breadcrumbs = array(
    'Tags' => array('index'),
    $model->name,
);
?>

<div class="block">
    <div class="block-title">
        <h2>View Tag #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'slug',
            'name',
            'status',
        'parent_id',
        'user_profile_id',
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/user'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
</div>