<?php
$this->breadcrumbs = array(
    'Variables' => array('index'),
    $model->name,
);
?>

<div class="block">
    <div class="block-title">
        <h2>View Variable #<strong><?php echo $model->id; ?></strong></h2>
    </div>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'name',
            'description',
            'Type.name',
            array(
                'name' => 'status_id',
                'type' => 'html',
                'value' => Status::model()->getLabelStatus($model->status_id),
            ),
            array(
                'name' => 'Expert.name',
                'value' => $model->Expert->name,
                'label' => 'Expert Name'
            ),
            'created_at',
            'updated_at',
        ),
        'htmlOptions' => array('class' => 'table table-borderless table-striped'),
    ));
    ?>
    <?php echo CHtml::link('<i class="fa fa-arrow-left"></i> Back', array('admin/variable'), array('class' => 'btn btn-warning', 'style' => 'margin-bottom:20px;')); ?>
</div>